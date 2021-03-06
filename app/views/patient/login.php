<div class="wrapper parallax-clinic">
    <div class="container login">
    <div class="row">
        <div class="panel panel-danger col-md-8 col-md-offset-2">
        <div class="panel-header">
            <h1 class="title">Patient Login</h1>
        </div>
        <div class="panel-body">
            <form name="patient-login" action="<?= ASSET_ROOT ?>/patient/login" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-3">Email :</label>
                    <div class="col-md-9">
                    <input name="email" type="text" class="form-control" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label col-md-3">Password :</label>
                    <div class="col-md-9">
                    <input name="password" type="password" class="form-control" placeholder="Your Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <button name="submit" class="btn btn-success btn-lg btn-border-success col-md-6 col-md-offset-4" type="submit">Login</button>
                </div>
            </form>
            <div class="not-mem">
                <h4 style="text-align:center">Don't have account? 
                    <a href="<?= ASSET_ROOT ?>/patient/register" class="btn btn-lg btn-primary btn-border-primary">Register</a>
                </h4>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>