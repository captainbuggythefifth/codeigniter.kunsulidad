<div class="col-sm-12 col-md-6 col-md-offset-3 panel-user-registration-container" style="display: block;">
    <div class="panel panel-info panel-user-registration">
        <div class="panel-heading">
            <h3 class="panel-title">Register</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-12 user-registration-container">
                <!--<form class="form-horizontal user-registration" action="/register" method="post" name="user-registration">-->
                    <?php echo form_open('register', array(
                        'class' => 'form-horizontal user-registration',
                        'name'  => 'user-registration'
                    ))?>
                    <fieldset>
                        <div class="form-group label-floating">
                            <label for="inputFirstName" class="control-label">First Name</label>
                            <input type="text" class="form-control" id="inputFirstName" name="first_name">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputLastName" class="control-label">Last Name</label>
                            <input type="text" class="form-control" id="inputLastName" name="last_name">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputUsername" class="control-label">Username</label>
                            <input type="text" class="form-control" id="inputUsername" name="username">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputEmail" class="control-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputPassword" class="control-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword" name="password">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputPasswordConf" class="control-label">Password Confirmation</label>
                            <input type="password" class="form-control" id="inputPasswordConf" name="passwordconf">
                        </div>


                        <!--<div class="form-group label-floating">
                            <label for="inputMiddleName" class="control-label">Middle Name</label>
                            <input type="text" class="form-control" id="inputMiddleName" name="middle_name">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputProfession" class="control-label">Profession</label>
                            <input type="text" class="form-control" id="inputProfession" name="profession">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputAge" class="control-label">Age</label>
                            <input type="text" class="form-control" id="inputAge" name="age">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputAddress" class="control-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address">
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputPhone" class="control-label">Phone</label>
                            <input type="text" class="form-control" id="inputPhone" name="phone">
                        </div>-->
                        <div class="errors">
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div style="float: right">
                                    <button type="submit" class="btn btn-raised btn-info" data-next="panel-photo-registration-container">NEXT</button>
                                </div>
                            </div>
                        </div>
                        <br>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>