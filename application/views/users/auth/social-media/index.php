<div class="col-sm-12 col-md-6 col-md-offset-3 panel-social-media-registration-container">
    <div class="panel panel-info panel-social-media-registration">
        <div class="panel-heading">
            <h3 class="panel-title">Register</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-12 user-registration-container">
                <!--<form class="form-horizontal user-registration" action="/register" method="post" name="user-registration">-->
                <?php echo form_open('register', array(
                    'class' => 'form-horizontal social-media-registration',
                    'name'  => 'social-media-registration'
                ))?>
                <fieldset>
                    <legend>Legend</legend>
                    <div class="form-group label-floating">
                        <label for="twitter" class="control-label">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter">
                    </div>
                    <div class="form-group label-floating">
                        <label for="facebook" class="control-label">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook">
                    </div>
                    <div class="form-group label-floating">
                        <label for="linkedin" class="control-label">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin">
                    </div>
                    <div class="form-group label-floating">
                        <label for="googleplus" class="control-label">Google Plus</label>
                        <input type="text" class="form-control" id="googleplus" name="googleplus">
                    </div>
                    <div class="form-group label-floating">
                        <label for="instagram" class="control-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram">
                    </div>
                    <div class="form-group label-floating">
                        <label for="github" class="control-label">Github</label>
                        <input type="text" class="form-control" id="github" name="github">
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
                                <button type="submit" class="btn btn-raised btn-info" data-next="finish">NEXT</button>
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