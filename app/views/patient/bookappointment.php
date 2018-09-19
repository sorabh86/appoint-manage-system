<div class="wrapper" style="margin-top:60px">
	<div class="container">
		<h2 class="page-header">Book Appointment</h2>
		<form name="book-appointment" action="" method="POST" class="form-horizontal" role="form">
			<div class="form-group">
				<label class="col-md-2 control-label">Type of Appointment : </label>
				<div class="col-md-10">
					<select name="appointment_type" class="form-control" required>
						<option value="" disabled selected>Choose Appointment Type</option>
						<option value="Consultancy">Consultancy</option>
						<option value="Lab Test">Lab Test</option>
					</select>
				</div>
			</div>
			<?php if(isset($data['expertises'])): ?>
				<div class="form-group">
					<label class="col-md-2 control-label">Doctors Expertise : </label>
					<div class="col-md-10">
						<select name="expertise_id" class="form-control" required>
							<option value="" disabled selected>Choose Expertise</option>
							<?php foreach($data['expertises'] as $expertise): ?>
								<option value="<?= $expertise->id ?>"><?= $expertise->title ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="well col-md-10 col-md-offset-2">
					<p id="dr-exp-desc">No Description Found.</p>
				</div>
			<?php else: ?>
				<div class="form-group">No Doctor Expertise records found, Please contact administrator!</div>
			<?php endif; ?>
			<!-- <?php if(isset($data['doctors'])): ?> -->
				<div class="form-group">
					<label class="col-md-2 control-label">Doctors : </label>
					<div class="col-md-10">
						<select name="doctor_id" class="form-control" required>
							<option value="" disabled selected>Choose a Doctor</option>
							<!-- <?php foreach($data['doctors'] as $doctor): ?>
								<option value="<?= $doctor->id ?>"><?= $doctor->name ?></option>
							<?php endforeach; ?> -->
						</select>
					</div>
				</div>
			<!-- <?php else: ?>
				<div class="form-group">No Doctors records found, Please contact administrator!</div>
			<?php endif; ?> -->
			<div class="form-group">
				<label class="col-md-2 control-label">Date of Appointment : </label>
				<div class="col-md-10">
					<input name="appointment_date" type="date" value="2018-04-27" class="form-control">
				</div>
			</div>
			<div role="tabpanel">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active">
						<a href="#picktime" aria-controls="picktime" role="tab" data-toggle="tab">Pick Your Time</a>
					</li>
					<!-- <li role="presentation">
						<a href="#sittingslot" aria-controls="sittingslot" role="tab" data-toggle="tab">Choose from Sitting Timeslot</a>
					</li> -->
				</ul>
			
				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="picktime">
						<div class="form-group">
							<label class="col-md-2 control-label">Time :</label>
							<div class="col-md-5">
								<input name="appointment_time" type="time" value="12:00" class="form-control">
							</div>
							<div class="col-md-5">
								<input name="appointment_hour" type="number" value="1" min="1" max="4" class="form-control">
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="sittingslot">
						<div class="form-group">
							<input name="timeslot_id" type="hidden" value="0">
							<label class="col-md-2 control-label">Sitting slots:</label>
							<div class="sitting-slot col-md-10">
								<ul class="list-group list-inline" >
								    <li class="list-group-item ">8:00AM-9:00AM</li>
								    <li class="list-group-item">8:00AM-9:00AM</li>
								    <li class="list-group-item">8:00AM-9:00AM</li>
								    <li class="list-group-item">8:00AM-9:00AM</li>
								    <li class="list-group-item">8:00AM-9:00AM</li>
							  	</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 control-label">Message:</label>
				<div class="col-md-10">
					<textarea name="message" rows="5" class="form-control" placeholder="Write some suggestion or Describe your symptoms if any"></textarea>
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<button name="submit" type="submit" class="btn col-md-4 btn-lg btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>