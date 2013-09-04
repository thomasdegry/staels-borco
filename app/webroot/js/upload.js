$(function () {

    var url = 'http://localhost/Personal/StaelsBorco',
        currentPicture = null;

    bindThumbnailClicks();

    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload({
            autoUpload: true,
            url: '../../server/php/',
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        // Uncomment the following to send cross-domain cookies:
        //xhrFields: {withCredentials: true},
    });

    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            '/cors/result.html?%s'
        )
    );

    if (window.location.hostname === 'blueimp.github.io') {
        // Demo settings:
        $('#fileupload').fileupload('option', {
            url: '//jquery-file-upload.appspot.com/',
            // Enable image resizing, except for Android and Opera,
            // which actually support image resizing, but fail to
            // send Blob objects via XHR requests:
            disableImageResize: /Android(?!.*Chrome)|Opera/
                .test(window.navigator.userAgent),
            maxFileSize: 5000000,
            acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i
        });
        // Upload server status check for browsers with CORS support:
        if ($.support.cors) {
            $.ajax({
                url: '//jquery-file-upload.appspot.com/',
                type: 'HEAD'
            }).fail(function () {
                $('<div class="alert alert-danger"/>')
                    .text('Upload server currently unavailable - ' +
                            new Date())
                    .appendTo('#fileupload');
            });
        }
    }

    $('#fileupload').bind('fileuploadstop', function(e, data) {
        console.log('all uploaded'); 
        $(".additional2").removeClass('hide');
        $("table[role='presentation']").html('');
        refresh();
    });

    $('#fileupload').bind('fileuploadadd', function(e, data) {
        $(".additional").removeClass('hide');
    });

    $("#fileupload").bind('fileuploaddestroy', function(e, data) {
        refresh();
    });

    function refresh() {
        $(".gallery").addClass('out');
        setTimeout(function() {
            $.ajax({
                type: 'GET',
                url: url + '/Galleries/refresh/' + $('input[name="album_id"]').val(),
                success: function(data) {
                    $(".gallery").html(data);
                    bindThumbnailClicks();
                    $(".gallery").removeClass('out');
                }
            });
        }, 500);
    }

    function bindThumbnailClicks() {
        $(".thumbnail").click(function(e) {
            e.preventDefault();

            var descrNL = $(this).find('.picture-info').find('.descr_nl').text(),
                descrFR = $(this).find('.picture-info').find('.descr_fr').text(),
                descrEN = $(this).find('.picture-info').find('.descr_en').text(),
                pictureID = $(this).attr('data-pictureid');

            console.log('bind thumbnail clicks');
            currentPicture = $(this);
            console.log(currentPicture);

            $('input[name="id"]').val(pictureID);
            $('input[name="descr_nl"]').val(descrNL);
            $('input[name="descr_fr"]').val(descrFR);
            $('input[name="descr_en"]').val(descrEN);

            $("#modalPicture").attr('src', $(this).find('img').attr('src'));
            $("#btnSave").val('Wijzigingen opslaan').removeAttr('disabled');
            $('#myModal').modal('show');
        });
    }

    $("#btnSave").click(function(e) {
        e.preventDefault();
        $(this).val('Saving...');
        $(this).attr('disabled', 'disabled');
        $.ajax({
            type: 'POST',
            url: url + '/Pictures/edit/' + $('input[name="id"]').val(),
            data: $("#image-data-form").serialize(),
            success: function(data) {
                $("#myModal").modal('hide');
                currentPicture.find('.picture-info').find('.descr_nl').text($("#modal-nl").val());
                currentPicture.find('.picture-info').find('.descr_fr').text($("#modal-fr").val());
                currentPicture.find('.picture-info').find('.descr_en').text($("#modal-en").val());
                checkTranslationsOnSave();
            }
        })
    });

    function checkTranslationsOnSave() {
        var nl = currentPicture.find('.picture-info').find('.descr_nl').text(),
            fr = currentPicture.find('.picture-info').find('.descr_fr').text(),
            en = currentPicture.find('.picture-info').find('.descr_en').text();

        if(!(nl == '' || fr == '' || en == '')) {
            $(currentPicture).next().addClass('out');
        } else {
            $(currentPicture).next().removeClass('out');
        }
    }

    $(".btn-delete-picture").click(function(e) {
        e.preventDefault();
        var pictureid = $('input[name="id"]').val();

        var answer = confirm('Bent u zeker dat u deze foto wilt verwijderen?');
        if(answer) {
            $.ajax({
                type: 'POST',
                url: url + '/Pictures/delete/' + pictureid,
                success: function(data) {
                    $("#myModal").modal('hide');
                    refresh();
                }
            });
        }
    });

});
