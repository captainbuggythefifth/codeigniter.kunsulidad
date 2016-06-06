var profile = profile || {};

profile.service = {
    _getItem:     function(itemHref, callback){
        $.ajax({
            url: itemHref,
            type: 'GET',
            dataType: 'json',
            success: function(result){
                callback && callback.success(result);
            }
        }).always(function(data){
            callback && callback.done(data);
        });
    },
};