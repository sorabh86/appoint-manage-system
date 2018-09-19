<div class="wrapper" style="margin-top:60px">
    <div class="container">
        <h2 class="page-header">APPOINTMENT LIST <a href="<?= ASSET_ROOT ?>/admin/addappointment" class="btn btn-success pull-right">ADD</a></h2>
        <?php if(isset($data['appointments'])) : ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Patient Id</th>
                        <th>Doctor</th>
                        <th>Timeslot</th>
                        <th>Appointment Type</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Duration (Hours)</th>
                        <th>Is Approved</th>
                        <th>Is Cancelled</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['appointments'] as $appointment): ?>
                        <tr>
                            <td><?= $appointment->id ?></td>
                            <td><?= $appointment->patient_id ?></td>
                            <td><?= $appointment->doctor_name ?></td>
                            <?php if($appointment->timeslot_id!=0): ?>
                                <td><?= $appointment->timeslot_id ?></td>
                            <?php else : ?>
                                <td>No</td>
                            <?php endif; ?>
                            <td><?= $appointment->appointment_type ?></td>
                            <td><?= $appointment->appointment_date ?></td>
                            <td><?= $appointment->appointment_time ?></td>
                            <td><?= $appointment->appointment_hour ?></td>
                            <td><?= $appointment->is_approved ?></td>
                            <td><?= $appointment->is_cancelled ?></td>
                            <td><a href="<?= ASSET_ROOT ?>/patient/editappointment/<?= $appointment->id ?>" class="btn btn-success">Edit</a> <a href="<?= ASSET_ROOT ?>/patient/cancelappointment/<?= $appointment->id ?>" class="btn btn-danger">Cancel</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p class="jumbotron">You didn't booked any Appointment yet.</p>
        <?php endif; ?>
    </div>
</div>
<div class="wrapper">
    <div class="container">
        <h2 class="page-header">Appointments <a href="<?= ASSET_ROOT ?>/admin/addappointment" class="btn btn-success pull-right">ADD</a></h2>
        <?php if(isset($data['patients'])) : ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Blood Group</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['patients'] as $patient): ?>
                        <tr>
                            <td><?= $patient->id ?></td>
                            <td><?= $patient->name ?></td>
                            <td><?= $patient->address ?></td>
                            <td><?= $patient->phone ?></td>
                            <td><?= $patient->email ?></td>
                            <td><?= $patient->blood_group ?></td>
                            <td><a href="#" class="btn btn-primary">View</a> <a href="#" class="btn btn-success">Edit</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No Records Found.</p>
        <?php endif; ?>
    </div>
</div>
