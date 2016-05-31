var users = users || {};

users.service = {
    _create:     function(data, callback){
        $.ajax({
            url: '/register',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(result){
                callback && callback.success(result);
            }
        }).always(function(data){
            callback && callback.done(data);
        });
    },
}