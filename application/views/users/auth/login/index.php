<div class="col-sm-12 col-md-6 col-md-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Log In</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-12">
                <form class="form-horizontal user-login" action="/login" method="post" name="user-login">
                    <fieldset>
                        <legend>Legend</legend>

                        <div class="form-group label-floating">
                            <label class="control-label col-md-4" for="username" style="text-align: left">User Name</label>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" id="username" class="form-control" name="username">
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
                        <div class="errors">
                            <button type="button" class="btn btn-default btn-toast" data-style="toast" data-content="" data-toggle="snackbar" data-timeout="2000">Show toast</button>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <!--<div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="rememberMe" value="1"> Remember Me
                                        </label>
                                    </div>-->
                                    <button type="button" class="fb-user-login btn btn-raised btn-fab" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook Log In" style="background-color: #3B5998"><i class="fa fa-facebook" aria-hidden="true" style="color: whitesmoke"></i></button>
                                </div>
                                <div style="float: right">
                                    <button type="submit" class="btn btn-raised btn-info">LOG IN</button>
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