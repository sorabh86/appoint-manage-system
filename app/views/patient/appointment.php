<div class="wrapper" style="margin-top:60px">
    <div class="container">
        <h2 class="page-header">APPOINTMENT LIST <a href="<?= ASSET_ROOT ?>/patient/bookappointment" class="btn btn-success pull-right">BOOK NEW</a></h2>
        <?php if(isset($data['appointments'])) : ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
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