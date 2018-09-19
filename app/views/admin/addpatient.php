<div class="wrapper">
	<div class="container">
		<h2 class="page-header">Add Patient</h2>
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
                <button name="submit" class="btn btn-success btn-lg col-md-4 col-md-offset-4 btn-border-success" type="submit">ADD</button>
            </div>
        </form>
	</div>
</div>