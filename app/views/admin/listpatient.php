<div class="wrapper">
    <div class="container">
        <h2 class="page-header">Patient <a href="<?= ASSET_ROOT ?>/admin/addpatient" class="btn btn-success pull-right">ADD</a></h2>
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
