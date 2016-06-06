var profile = profile || {};

var $body = $('body');

$body.on('click', '.profile-items', function (e) {
    e.preventDefault();
    profile.core.Binders._getItem(e);
})