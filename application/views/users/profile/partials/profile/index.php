<div class="col-md-12">
    <div class="jumbotron">
        <h1>Profile</h1>

        <form class="form-horizontal user-update-profile" action="/login" method="post" name="user-update-profile">
            <fieldset>
                <legend>Legend</legend>

                <div class="col-md-8 col-md-offset-2">
                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="first_name" style="text-align: left">First
                            Name</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="first_name" class="form-control" name="first_name" value="<?php echo $aUser['first_name']?>">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">face</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="middle_name" style="text-align: left">Middle
                            Name</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="middle_name" class="form-control" name="middle_name" value="<?php echo $aUser['middle_name']?>">
                                        <span class="input-group-btn">
                                          <button type="button" class="btn btn-fab btn-fab-mini">
                                              <i class="material-icons">face</i>
                                          </button>
                                        </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="last_name" style="text-align: left">Last Name</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="last_name" class="form-control" name="last_name" value="<?php echo $aUser['last_name']?>">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">face</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="username" style="text-align: left">User Name</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="username" class="form-control" name="username" value="<?php echo $aUser['username']?>">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">face</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="age" style="text-align: left">Age</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="age" class="form-control" name="age" value="<?php echo $aUser['age']?>">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">face</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="address" style="text-align: left">Address</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="address" class="form-control" name="address" value="<?php echo $aUser['address']?>">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-fab btn-fab-mini">
                                            <i class="material-icons">face</i>
                                        </button>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="phone" style="text-align: left">Phone</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="phone" class="form-control" name="phone" value="<?php echo $aUser['first_name']?>">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">face</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group label-floating">
                        <label class="control-label col-md-4" for="email" style="text-align: left">Email Address</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="text" id="email" class="form-control" name="email" value="<?php echo $aUser['email']?>">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">face</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group label-floating">
                        <label class="control-label col-md-1" for="email">Password</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="password" id="password" class="form-control" name="password">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">loyalty</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label col-md-1" for="passwordconf">Confirm Password</label>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="password" id="passwordconf" class="form-control" name="passwordconf">
                                    <span class="input-group-btn">
                                      <button type="button" class="btn btn-fab btn-fab-mini">
                                          <i class="material-icons">loyalty</i>
                                      </button>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <div class="errors">
                        <button type="button" class="btn btn-default btn-toast" data-style="toast" data-content=""
                                data-toggle="snackbar" data-timeout="2000">Show toast
                        </button>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">

                            <div style="float: right">
                                <button type="submit" class="btn btn-raised btn-info">EDIT</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </fieldset>
        </form>
    </div>
</div>
