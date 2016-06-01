var socialMedia = socialMedia || {};

socialMedia.service = {
    _create:     function(data, callback){
        $.ajax({
            url: '/social-media/create',
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