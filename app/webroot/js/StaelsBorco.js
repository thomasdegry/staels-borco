$(document).ready(function() {
    var url = 'http://localhost/Personal/StaelsBorco';
    var currentPicture = null;

    bindThumbnailClicks();

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

    $("#btnRefresh").click(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: url + '/Galleries/refresh/' + $('input[name="album_id"]').val(),
            success: function(data) {
                $(".gallery").html(data);
                bindThumbnailClicks();
            }
        });
    });

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

    function checkTranslationsOnSave() {
        var nl = currentPicture.find('.picture-info').find('.descr_nl').text(),
            fr = currentPicture.find('.picture-info').find('.descr_fr').text(),
            en = currentPicture.find('.picture-info').find('.descr_en').text();

        if(!(nl == '' || fr == '' || en == '')) {
            $(currentPicture).next().addClass('out');
        } else {
            $(currentPicture).next().removeClass('out');
        }

        // if(nl !== '' && fr !== '' && en !== '') {
        //     $(currentPicture).next().addClass('out');
        // } else {
        //     $(currentPicture).next().removeClass('out');
        // }
    }

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

            currentPicture = $(this);

            $('input[name="id"]').val(pictureID);
            $('input[name="descr_nl"]').val(descrNL);
            $('input[name="descr_fr"]').val(descrFR);
            $('input[name="descr_en"]').val(descrEN);

            $("#modalPicture").attr('src', $(this).find('img').attr('src'));
            $("#btnSave").val('Wijzigingen opslaan').removeAttr('disabled');
            $('#myModal').modal('show');
        });
    }
});