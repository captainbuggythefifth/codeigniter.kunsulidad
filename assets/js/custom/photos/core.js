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
                        var windowWidth = $(window).width();
                        var windowHeight = $(window).height();
                        var windowOffset = $('body').offset();
                        console.log(windowOffset);
                        var carouselContainer = $('.carousel-container');
                        carouselContainer.width(windowWidth);
                        carouselContainer.height(windowHeight);
                        carouselContainer.offset({
                            top: windowOffset.top,
                            left: windowOffset.left
                        });

                        $('.carousel-inner').html("<div></div>");
                        var iCtr = 0;
                        $.each(result.aImages, function (index, value) {
                            console.log(index);
                            var $item = $('<div></div>').addClass("item custom-carousel-item");
                            var $img = $('<img>').addClass("custom-carousel-image").attr("src", value);
                            if(iCtr == 0){
                                $item.addClass("active");
                            }
                            $item.html($img);
                            $('.carousel-inner').append($item);
                            iCtr++;
                        });
                        $('.carousel').show();
                        carouselContainer.css({
                            visibility: "visible"
                        });
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