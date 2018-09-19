<div class="wrapper">
    <div class="container">
        <h2 class="page-header">Doctors <a href="<?= ASSET_ROOT ?>/admin/adddoctor" class="btn btn-success pull-right">ADD</a></h2>
        <?php if(isset($data['doctors'])) : ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Phone No.</th>
                        <th>Email</th>
                        <th>Expertise</th>
                        <th>Take Appointment</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['doctors'] as $doctor): ?>
                        <tr>
                            <td><?= $doctor->id ?></td>
                            <td><?= $doctor->name ?></td>
                            <td><?= $doctor->address ?></td>
                            <td><?= $doctor->phone ?></td>
                            <td><?= $doctor->email ?></td>
                            <td><?= $doctor->title.' ('.$doctor->expertise_id.')' ?></td>
                            <td><?= $doctor->take_appointment ?></td>
                            <td>
                                <a href="#" class="btn btn-link">View</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-link">Edit</a>
                            </td>
                            <td>
                                <a href="#" class="btn btn-link">Delete</a>
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
