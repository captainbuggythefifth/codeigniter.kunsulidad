var users = users || {};
var photos = photos || {};
var socialMedia = socialMedia || {};

users.core = {
    Binders: {
        _create:    function(e){
            var $spinner = $("<i class='fa fa-spinner fa-spin' aria-hidden='true' style='text-align: center'></i>");

            var form = $(e.target);
            var data = form.serialize();

            form.find("button").html($spinner);

            users.service._create(data, {
                success: function (result) {
                    if(result.status == false){
                        $.each(result.aFields, function (key, value) {
                            var sWarning = $("<span></span>").addClass("help-block help-block-error-message");
                            sWarning.html(value);
                            var formParent = form.find("input[name='"+ key +"']").parent();
                            if(formParent.find('.help-block').hasClass('help-block-error-message')){
                                formParent.addClass('has-error').find('.help-block').html(value);
                            }
                            else{
                                formParent.addClass('has-error').prepend(sWarning);
                            }
                        })
                    }
                    else{
                        $('input[name="iUserID"]').val(result.iUserID);
                        users.core.FormMovement._next();
                    }
                },
                done: function(result){
                    form.find("button").html("NEXT");
                }
            })
        },
        _fbCreate: function(e){
            FB.getLoginStatus(function (response) {
                if(response.status === 'connected'){
                    FB.logout();
                }
                else{
                    FB.login(function(response) {
                        if (response.authResponse) {
                            FB.api('/me', {fields: 'first_name, last_name, email, cover, link, picture.width(720).height(720)'}, function(response) {
                                console.log(JSON.stringify(response));
                                users.core.Binders._fillFields(response);
                                $('.switch-photo-register').trigger("click");
                                photos.core.Binders._fillFields(response);
                                socialMedia.core.Binders._fillFields(response);
                            });
                        } else {
                            console.log('User cancelled login or did not fully authorize.');
                        }
                    }, {
                        scope: 'email,public_profile,user_about_me,user_photos'
                    });
                }
            });
        },
        _fillFields: function (data) {
            var $form = $('.user-registration');
            $form.find("input[name='first_name']").val(data.first_name).parent().removeClass("is-empty");
            $form.find("input[name='last_name']").val(data.last_name).parent().removeClass("is-empty");
            $form.find("input[name='email']").val(data.email).parent().removeClass("is-empty");
        }
    },
    FormMovement: {
        _next: function () {
            $('.panel-user-registration-container').addClass("animated slideOutLeft");

            setTimeout(function () {
                $('.panel-user-registration-container').hide();
            }, 500);
            setTimeout(function () {
                $('.panel-photo-registration-container').show();
                $('.panel-photo-registration-container').addClass("animated slideInRight");
            }, 500);
        }
    }
}