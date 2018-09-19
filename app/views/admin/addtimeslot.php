<div class="wrapper">
	<div class="container">
		<h2 class="page-header">Add Timeslot</h2>
		<form name="" action="" method="POST" class="form-horizontal">
            <?php if(isset($data['doctors'])): ?>
                <div class="form-group">
                    <label class="col-md-2 control-label">Doctors : </label>
                    <div class="col-md-10">
                        <select name="doctor_id" class="form-control" required>
                            <option value="" disabled selected>Choose a Doctor</option>
                            <?php foreach($data['doctors'] as $doctor): ?>
                                <option value="<?= $doctor->id ?>"><?= $doctor->name ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            <?php else: ?>
                <div class="form-group">No Doctors records found, Please contact administrator!</div>
            <?php endif; ?>
            <div class="form-group">
                <label class="col-md-2 control-label">Date : </label>
                <div class="col-md-10">
                    <input name="date" type="date" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="control-label col-md-2">Start Time :</label>
                <div class="col-md-10">
                <input id="phone" name="start_time" type="time" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="control-label col-md-2">End Time :</label>
                <div class="col-md-10">
                <input id="phone" name="end_time" type="time" class="form-control" required>
                </div>
            </div>
            
            <div class="form-group">
                <button name="submit" class="btn btn-success btn-lg col-md-4 col-md-offset-4 btn-border-success" type="submit">ADD</button>
            </div>
        </form>
	</div>
</div>