<div class="col-sm-12 col-md-6 col-md-offset-3 panel-photo-registration-container">
    <div class="panel panel-info panel-photo-registration">
        <div class="panel-heading">
            <h3 class="panel-title">Register</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-12 photo-registration-container">
                <!--<form class="form-horizontal photo-registration" action="/register" method="post" name="user-registration" enctype="multipart/form-data">-->
                <?php echo form_open_multipart('register', array(
                    'class' => 'form-horizontal photo-registration',
                    'name'  => 'photo-registration'
                ))?>
                <fieldset>
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
                    <div class="errors">

                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <div style="float: right">
                                <button type="submit" class="btn btn-raised btn-info" data-next="panel-social-media-registration-container">NEXT</button>
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