var users = users || {};

var $body = $('body');
$body.on('submit', '.user-registration', function (e) {
    e.preventDefault();
    users.core.Binders._create(e);
});

$body.on('click', '.fb-register' , function (e) {
    var form = $('.user-registration');
    users.core.Binders._fbCreate(e, form);
});

$body.on('submit', '.user-login', function (e) {
    e.preventDefault();
    users.core.Binders._login(e);
});

$body.on('click', '.fb-user-login', function (e) {
    e.preventDefault();
    users.core.Binders._fbLogin(e);
});

$body.on('submit', '.user-update-profile', function (e) {
    e.preventDefault();
    users.core.Binders._update(e);
})
