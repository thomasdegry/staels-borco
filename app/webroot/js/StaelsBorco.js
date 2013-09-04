// $(document).ready(function() {
//     var url = 'http://localhost/Personal/StaelsBorco';
//     var currentPicture = null;

//     bindThumbnailClicks();

//     $("#btnRefresh").click(function(e) {
//         e.preventDefault();
//         $.ajax({
//             type: 'GET',
//             url: url + '/Galleries/refresh/' + $('input[name="album_id"]').val(),
//             success: function(data) {
//                 $(".gallery").html(data);
//                 bindThumbnailClicks();
//             }
//         });
//     });

//     }
// });