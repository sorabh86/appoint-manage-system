<div class="wrapper">
    <div class="container">
        <h2 class="page-header">Sitting Timeslots <a href="<?= ASSET_ROOT ?>/admin/addtimeslot" class="btn btn-success pull-right">ADD</a></h2>
        <?php if(isset($data['timeslots'])) : ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['timeslots'] as $timeslot): ?>
                        <tr>
                            <td><?= $timeslot->id ?></td>
                            <td><?= $timeslot->name.' ('.$timeslot->doctor_id.')' ?></td>
                            <td><?= $timeslot->date ?></td>
                            <td><?= $timeslot->start_time ?></td>
                            <td><?= $timeslot->end_time ?></td>
                            <td>
                                <a href="#" class="btn btn-primary">View</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No Records Found.</p>
        <?php endif; ?>
    </div>
</div>
