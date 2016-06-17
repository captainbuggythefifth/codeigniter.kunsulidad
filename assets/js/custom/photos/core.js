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
                            var data = {
                                channel : encodeURIComponent(value)
                            };
                            photos.service._getPhotoByChannel(data, {
                                success: function (response) {
                                    console.log(response);
                                },
                                done: function (response) {
                                    var $item = $('<div></div>').addClass("item custom-carousel-item");
                                    var $img = $('<img>').addClass("custom-carousel-image").attr("src", value);
                                    if(iCtr == 0){
                                        $item.addClass("active");
                                    }
                                    $item.html($img);
                                    $('.carousel-inner').append($item);
                                    iCtr++;
                                }
                            });

                        });
                        $('.carousel').show();
                        carouselContainer.css({
                            visibility: "visible"
                        });
                    }
                },
                done: function(result){
                    console.log(result);
                }
            });
        },
        _createPhotoAlbum: function (e) {

            var data = {
                "album" : $('input[name="photo-album-name"]').val()
            };
            if(data == null){
                var photoAlbumContainer = $('input[name="photo-album-name"]').parent();
                var sWarning = $("<span></span>").addClass("help-block help-block-error-message");
                sWarning.html("The album name seems to be empty");
                photoAlbumContainer.prepend(sWarning);
                photoAlbumContainer.parents().closest(".form-group").addClass('has-error');
            }
            photos.service._createPhotoAlbum(data, {
                success: function (response) {
                    if(response.status == false){
                        var photoAlbumContainer = $('input[name="photo-album-name"]').parent();
                        var sWarning = $("<span></span>").addClass("help-block help-block-error-message");
                        sWarning.html(response.message);
                        photoAlbumContainer.prepend(sWarning);
                        photoAlbumContainer.parents().closest(".form-group").addClass('has-error');
                    }
                    else{
                        var files = e.target.files;
                        var form = new FormData();
                        for(var i = 0; i < files.length; i++){
                            var imgPreviewContainer = $('<div></div>').addClass("col-xs-6 col-md-3");
                            var imgPreview = $('<a></a>').addClass("thumbnail");

                            var img = $('<img>').addClass("img-responsive").attr("src", URL.createObjectURL(files[i]));
                            imgPreview.append(img);
                            imgPreviewContainer.append(imgPreview);
                            $('.images-preview').append(imgPreviewContainer);
                        }
                        for(var i = 0; i < files.length; i++){
                            form.append("photo-album", files[i]);
                            form.append("album", data.album);
                            photos.service._uploadPhotoAlbum(form, {
                                success: function (response) {
                                    console.log(response);
                                },
                                done: function (response) {

                                }
                            });
                            form = new FormData;
                        }

                    }
                },
                done: function (response) {
                    //console.log(response);
                }
            });
            
        },
        _setAsProfile: function (e) {
            var $this = $(e.target);
            var customCarousel = $('.custom-carousel-item');
            var imgChannel = "";
            customCarousel.each(function (index) {
                if($(this).hasClass("active")){
                    imgChannel = $(this).find("img").attr("src")
                }
            });
            if(imgChannel != ""){
                var data = {
                    "channel" : imgChannel
                };
                photos.service._setAsProfile(data, {
                    success : function (response) {
                        /*if(response.status == true){
                            
                        }*/
                    },
                    done: function (response) {
                        console.log(response);
                        var options =  {
                            content: response.message,
                            style: "toast",
                            timeout: 3000
                        };
                        $.snackbar(options);
                    }
                });
            }
        },
        _setAsBackground: function (e) {
            var $this = $(e.target);
            var customCarousel = $('.custom-carousel-item');
            var imgChannel = "";
            customCarousel.each(function (index) {
                if($(this).hasClass("active")){
                    imgChannel = $(this).find("img").attr("src")
                }
            });
            if(imgChannel != ""){
                var data = {
                    "channel" : imgChannel
                };
                photos.service._setAsProfile(data, {
                    success : function (response) {
                        /*if(response.status == true){

                         }*/
                    },
                    done: function (response) {
                        var options =  {
                            content: response.message,
                            style: "toast",
                            timeout: 3000
                        };
                        $.snackbar(options);
                    }
                });
            }
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