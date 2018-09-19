<div class="wrapper">
    <div class="container">
        <h2 class="page-header">Doctor Expertise <a href="<?= ASSET_ROOT ?>/admin/addexpertisedoctor" class="btn btn-success pull-right">ADD</a></h2>
        <?php if(isset($data['doctor_expertise'])) : ?>
            <table class="table table-hover table-condensed">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data['doctor_expertise'] as $expertise): ?>
                        <tr>
                            <td><?= $expertise->id ?></td>
                            <td><?= $expertise->title ?></td>
                            <td><?= $expertise->description ?></td>
                            <td>
                                <a href="#" class="btn btn-primary" title="View"><span class="glyphicon glyphicon-list"></span></a>
                            </td>
                            <td>
                                <a title="Edit" href="#" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a>
                            </td>
                            <td> 
                                <a href="#" class="btn btn-danger" title="delete"><span class="glyphicon glyphicon-trash"></span></a>
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
