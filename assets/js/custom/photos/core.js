var photos = photos || {};

photos.core = {
    Binders: {
        _create:    function(e){

            var form = $(e.target);

            var formData = new FormData(e.target);
            formData.append("iUserID", $('input[name="iUserID"]').val());
            photos.service._create(formData, {
                success: function (result) {
                    console.log(result);
                    if(result.status == true){
                        console.log(result);
                        photos.core.FormMovement._next();
                    }
                },
                done: function(result){
                    if(result.status == false){
                        form.find('.errors').append(result.message);
                    }
                }
            })
            
        },
        _createFromCloud: function (e) {
            var form = $(e.target);
            var data = form.serializeArray();
            data.push({
                name: "user_id", value: $('input[name="iUserID"]').val()
            });
            photos.service._createFromCloud(data, {
                success: function (result) {
                    console.log(result);
                    if(result.status == true){
                        console.log(result);
                        photos.core.FormMovement._next();
                    }
                },
                done: function(result){
                    if(result.status == false){
                        form.find('.errors').append(result.message);
                    }
                }
            });
        },
        _fillFields: function (data) {
            var $form = $('.photo-cloud-registration');
            $form.find('input[name="cloud_photo_background"]').val(data.cover.source).parents().closest(".label-floating").removeClass("is-empty");
            $form.find('input[name="cloud_photo_profile"]').val(data.picture.data.url).parents().closest(".label-floating").removeClass("is-empty");
        },
        _switchPhotoRegister: function (e) {
            var $this = $(e.target);
            $this.parents().find('.togglePhotoRegistration').toggle();
        },
        _getPhotosFromDirectory: function (e) {
            var $this = $(e.target);
            var data = {
                'directory' : $this.data("directory")
            };
            photos.service._getPhotosFromDirectory(data, {
                success: function (result) {
                    if(result.status == true){
                        console.log(result);
                        $('.carousel-container').html($(result.html));
                    }
                },
                done: function(result){

                }
            });
        }
    },
    FormMovement: {
        _next: function () {
            $('.panel-photo-registration-container').addClass("animated slideOutLeft");

            setTimeout(function () {
                $('.panel-photo-registration-container').hide();
            }, 500);
            setTimeout(function () {
                $('.panel-social-media-registration-container').show();
                $('.panel-social-media-registration-container').addClass("animated slideInRight");
            }, 500);
        }
    }
}