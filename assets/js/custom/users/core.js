var users = users || {};

users.core = {
    Binders: {
        _create:    function(e){
            var form = $(e.target);
            console.log(form);
            var data = form.serialize();
            users.service._create(data, {
                success: function (result) {
                    console.log(result);
                },
                done: function(result){
                    
                }
            })
        },
        /*display:   this._privateFunctions._display(e),
        update:    this._privateFunctions._update(e),
        delete:    this._privateFunctions._delete(e)*/
    },
}