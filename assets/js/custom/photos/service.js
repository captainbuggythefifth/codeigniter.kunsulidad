var photos = photos || {};

photos.service = {
    _create:     function(data, callback){
        $.ajax({
            url: '/photos/create',
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            cache:false,
            data: data,
            success: function(result){
                callback && callback.success(result);
            }
        }).always(function(data){
            callback && callback.done(data);
        });
    },
    _createFromCloud: function (data, callback) {
        $.ajax({
            url: '/photos/createFromCloud',
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