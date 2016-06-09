var photos = photos || {};

var $body = $('body');
$body.on('submit', '.photo-registration', function (e) {
    e.preventDefault();
    photos.core.Binders._create(e);
});

$body.on('submit', '.photo-cloud-registration', function (e) {
    e.preventDefault();
    photos.core.Binders._createFromCloud(e);
});

$body.on('click', '.switch-photo-register', function (e) {
    //console.log("SWITCH UI");
    photos.core.Binders._switchPhotoRegister(e);
});

$body.on('click', '.getPhotosFromDirectory', function (e) {
    e.preventDefault();
    photos.core.Binders._getPhotosFromDirectory(e);
});

$body.on('click', '.carousel-container', function (e) {
    $(this).css({
        visibility: "hidden"
    });
    $('.carousel').hide();
})

$body.on('change', 'input[name="create-photo-album[]"]', function (e) {
    photos.core.Binders._createPhotoAlbum(e);
})
