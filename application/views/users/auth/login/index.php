<div class="col-sm-12 col-md-6 col-md-offset-3">
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Log In</h3>
        </div>
        <div class="panel-body">
            <div class="col-sm-12 col-md-12">
                <form class="form-horizontal" action="/login" method="post">
                    <fieldset>
                        <legend>Legend</legend>
                        <div class="form-group label-floating">
                            <label for="inputEmail" class="control-label col-md-1">Email</label>

                            <div class="col-md-10">
                                <input type="email" class="form-control" id="inputEmail" name="email">
                            </div>
                        </div>
                        <div class="form-group label-floating">
                            <label for="inputPassword" class="control-label col-md-1">Password</label>

                            <div class="col-md-10">
                                <input type="password" class="form-control" id="inputPassword" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div style="float: left;">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="rememberMe" value="1"> Remember Me
                                        </label>
                                    </div>
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