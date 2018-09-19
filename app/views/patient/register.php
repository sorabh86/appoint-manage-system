<div class="wrapper parallax-clinic">
    <div class="container register">
        <div class="row">
            <div class="panel panel-danger col-md-8 col-md-offset-2">
                <div class="panel-header">
                    <h1 class="title">Patient Registration</h1>
                </div>
                <div class="panel-body">
                    <form name="patient-register" action="" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label for="name" class="control-label col-md-3">Name :</label>
                            <div class="col-md-9">
                            <input id="name" name="name" type="text" class="form-control" placeholder="Your Full Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="control-label col-md-3">Address :</label>
                            <div class="col-md-9">
                            <input id="address" name="address" type="text" class="form-control" placeholder="Your Full Address" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="control-label col-md-3">Phone No :</label>
                            <div class="col-md-9">
                            <input id="phone" name="phone" type="text" class="form-control" placeholder="+91 5555-555-555" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-md-3">Email :</label>
                            <div class="col-md-9">
                            <input id="email" name="email" type="email" class="form-control" placeholder="your@email.com" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-md-3">Password :</label>
                            <div class="col-md-9">
                            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password" class="control-label col-md-3">Confirm Password :</label>
                            <div class="col-md-9">
                            <input id="confirm_password" name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="blood_group" class="control-label col-md-3">Blood Group :</label>
                            <div class="col-md-9">
                            <select id="blood_group" name="blood_group" class="form-control" required>
                                <option value="" disabled selected>Select Blood Group</option>
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O+">O-</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-success btn-lg col-md-4 col-md-offset-4 btn-border-success" type="submit">Register</button>
                        </div>
                    </form>
                    <div class="already-mem">
                        <h4 style="text-align:center">Already a member ? 
                            <a href="<?= ASSET_ROOT ?>/patient/login" class="btn btn-lg btn-primary btn-border-primary">login</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
