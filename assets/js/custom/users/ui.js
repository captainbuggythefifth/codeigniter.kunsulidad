var users = users || {};

var $body = $('body');
$body.on('submit', '.user-registration', function (e) {
    e.preventDefault();
    users.core.Binders._create(e);
});
