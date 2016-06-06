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

    _login: function (data, callback) {
        $.ajax({
            url: '/login',
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

    _fbLogin: function (data, callback) {
        $.ajax({
            url: '/fbLogin',
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
    _update: function (data, callback) {
        $.ajax({
            url: '/update',
            type: 'POST',
            dataType: 'json',
            data: data,
            success: function(result){
                callback && callback.success(result);
            }
        }).always(function(data){
            callback && callback.done(data);
        });
    }
}