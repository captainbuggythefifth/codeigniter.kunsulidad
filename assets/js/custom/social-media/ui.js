var socialMedia = socialMedia || {};

var $body = $('body');
$body.on('submit', '.social-media-registration', function (e) {
    e.preventDefault();
    socialMedia.core.Binders._create(e);
});
