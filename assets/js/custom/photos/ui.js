var photos = photos || {};

var $body = $('body');
$body.on('submit', '.photo-registration', function (e) {
    e.preventDefault();
    photos.core.Binders._create(e);
});
