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
        /*display:   this._privateFunctions._display(e),
        update:    this._privateFunctions._update(e),
        delete:    this._privateFunctions._delete(e)*/
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