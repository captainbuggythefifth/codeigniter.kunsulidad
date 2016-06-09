var profile = profile || {};

profile.core = {
    Binders : {
        _getItem: function (e) {
            var itemHref = $(e.target).data("href");
            profile.service._getItem(itemHref, {
                success: function (response) {
                    if(response.status == true){
                        $('.load-profile-item').html($(response.html));
                    }
                },
                done: function (response) {
                }
            });
        }
    }
};