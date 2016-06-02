<div class="col-sm-12 col-md-6 col-md-offset-3 panel-photo-registration-container">
    <div class="panel panel-info panel-photo-registration">
        <div class="panel-heading">
            <h3 class="panel-title">Register</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-12 photo-registration-container togglePhotoRegistration">
                <!--<form class="form-horizontal photo-registration" action="/register" method="post" name="user-registration" enctype="multipart/form-data">-->
                <?php echo form_open_multipart('register', array(
                    'class' => 'form-horizontal photo-registration',
                    'name' => 'photo-registration'
                )) ?>
                <fieldset>
                    <div class="togglePhotoRegistration photoRegistrationLocal">
                        <div class="form-group">
                            <label for="inputProfilePhoto" class="col-md-2 control-label">Profile Photo</label>

                            <div class="col-md-10">
                                <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                <input type="file" id="inputProfilePhoto" name="photo_profile">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputBackgroundPhoto" class="col-md-2 control-label">Background Photo</label>

                            <div class="col-md-10">
                                <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                <input type="file" id="inputBackgroundPhoto" name="photo_background">
                            </div>
                        </div>
                    </div>

                    <div class="errors">

                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div style="float: left">
                                <div class="facebook-register-container col-sm-12 col-md-12">
                                    <div class="facebook-register">
                                        <button type="button" class="btn btn-raised btn-block switch-photo-register" data-show="cloud" style="background-color: #2196F3; color: whitesmoke">
                                            PASTE FROM URL &nbsp; <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div style="float: right">
                                <button type="submit" class="btn btn-raised btn-info"
                                        data-next="panel-social-media-registration-container">NEXT
                                </button>
                            </div>
                        </div>
                    </div>
                    <br>
                </fieldset>
                </form>
            </div>

            <div class="col-sm-12 col-md-12 photo-registration-cloud-container togglePhotoRegistration">
                <!--<form class="form-horizontal photo-registration" action="/register" method="post" name="user-registration" enctype="multipart/form-data">-->
                <?php echo form_open_multipart('register', array(
                    'class' => 'form-horizontal photo-cloud-registration',
                    'name' => 'photo-cloud-registration'
                )) ?>
                <fieldset>
                    <div class="form-group label-floating">
                        <label class="control-label" for="cloudPhotoProfile">Attach URL for Profile</label>
                        <div class="input-group">
                            <input type="text" id="cloudPhotoProfile" class="form-control" name="cloud_photo_profile">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-fab btn-fab-mini">
                                    <i class="material-icons">attach_file</i>
                                </button>
                            </span>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label" for="cloudPhotoBackground">Attach URL for Background</label>
                        <div class="input-group">
                            <input type="text" id="cloudPhotoBackground" class="form-control" name="cloud_photo_background">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-fab btn-fab-mini">
                                    <i class="material-icons">attach_file</i>
                                </button>
                            </span>
                        </div>
                    </div>

                    <div class="errors">

                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div style="float: left">
                                <div class="facebook-register-container col-sm-12 col-md-12">
                                    <div class="facebook-register">
                                        <button type="button" class="btn btn-raised btn-block switch-photo-register" data-show="local" style="background-color: #2196F3; color: whitesmoke">
                                            PASTE FROM LOCAL &nbsp; <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div style="float: right">
                                <button type="submit" class="btn btn-raised btn-info"
                                        data-next="panel-social-media-registration-container">NEXT
                                </button>
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