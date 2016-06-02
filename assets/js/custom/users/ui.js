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
