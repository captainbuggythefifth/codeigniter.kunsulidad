var socialMedia = socialMedia || {};

socialMedia.core = {
    Binders: {
        _create:    function(e){
            var form = $(e.target);
            console.log(form);
            var data = form.serialize();
            socialMedia.service._create(data, {
                success: function (result) {
                    console.log(result);
                    if(result.status == true){
                        socialMedia.core.FormMovement._next(result.sUsername);
                    }
                },
                done: function(result){
                    if(result.status == false){
                        form.find('.errors').append(result.message);
                    }
                }
            })
        },
        _fillFields: function (data) {
            var $form = $('.social-media-registration');
            $form.find("input[name='facebook']").val(data.link).parent().removeClass("is-empty");
        }
    },

    FormMovement: {
        _next: function (sUsername) {
            $('.panel-social-media-registration-container').addClass("animated slideOutLeft");

            setTimeout(function () {
                $('.panel-social-media-registration-container').hide();
            }, 500);
            setTimeout(function () {
                $('.panel-welcome-container').show();
                $('.panel-welcome-container').addClass("animated slideInRight");
            }, 500);


            setTimeout(function () {
                window.location = "/profile/" + sUsername;
            }, 5000)
        }
    }
}