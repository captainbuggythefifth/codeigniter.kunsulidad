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
    },
    _getPhotosFromDirectory: function (data, callback) {
        $.ajax({
            url: '/photos/getPhotosFromDirectory',
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
    _createPhotoAlbum: function(data, callback){
        $.ajax({
            url: '/photos/createPhotoAlbum',
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
    _uploadPhotoAlbum: function(data, callback){
        $.ajax({
            url: '/photos/uploadPhotoAlbum',
            type: 'POST',
            dataType: 'json',
            contentType: false,
            processData: false,
            data: data,
            success: function(result){
                callback && callback.success(result);
            }
        }).always(function(data){
            callback && callback.done(data);
        });
    },
    _setAsProfile: function(data, callback){
        $.ajax({
            url: '/photos/setAsProfile',
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

    _setAsBackground: function(data, callback){
        $.ajax({
            url: '/photos/setAsBackground',
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

    _getPhotoByChannel: function(data, callback){
        $.ajax({
            url: '/photos/getPhotoByChannel',
            type: 'GET',
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