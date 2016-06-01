var socialMedia = socialMedia || {};

socialMedia.core = {
    Binders: {
        _create:    function(e){
            var form = $(e.target);
            console.log(form);
            var data = form.serialize();
            console.log(data);
            data.user_id = $('input[name="iUserID"]').val();
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
        /*display:   this._privateFunctions._display(e),
        update:    this._privateFunctions._update(e),
        delete:    this._privateFunctions._delete(e)*/
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