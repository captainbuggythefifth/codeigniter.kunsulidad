var users = users || {};

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