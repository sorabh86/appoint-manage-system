<div class="wrapper">
	<div class="container">
		<h2 class="page-header">Add Doctor</h2>
		<form name="add-doctor" action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-sm-2 control-label">Name :</label>
				<div class="col-sm-10">
					<input name="name" type="text" class="form-control" placeholder="Doctor Name" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Address :</label>
				<div class="col-sm-10">
					<input name="address" type="text" class="form-control" placeholder="Doctor Address" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Phone :</label>
				<div class="col-sm-10">
					<input name="phone" type="text" class="form-control" placeholder="Doctor Phone No." required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Email :</label>
				<div class="col-sm-10">
					<input name="email" type="text" class="form-control" placeholder="Doctor Email Address" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Expertise :</label>
				<div class="col-sm-10">
					<select name="expertise" class="form-control" required>
						<option default selected disabled>Choose Expertise of Doctor</option>
						<?php foreach ($data['doctor_expertise'] as $expertise) : ?>
							<option value="<?= $expertise->id ?>"><?= $expertise->title ?></option>
						<?php endforeach; ?>
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">Takes Appointment :</label>
				<div class="col-sm-10 radio">
					<label><input type="radio" name="take_appointment" value="YES" checked="checked"> Yes </label>
					<label><input type="radio" name="take_appointment" value="NO"> No </label>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>