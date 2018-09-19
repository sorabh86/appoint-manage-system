<div class="wrapper" style="margin-top:60px">
    <div class="container">
        <h1 class="page-header">Your Profile</h1>
        <ul class="list-group">
            <li class="list-group-item"><strong>Name:</strong> <?= $_SESSION['user']->name ?></li>
            <li class="list-group-item"><strong>Address:</strong> <?= $_SESSION['user']->address ?></li>
            <li class="list-group-item"><strong>Phone:</strong> <?= $_SESSION['user']->phone ?></li>
            <li class="list-group-item"><strong>Email:</strong> <?= $_SESSION['user']->email ?></li>
            <li class="list-group-item"><strong>Blood Group:</strong> <?= $_SESSION['user']->blood_group ?></li>
            <li class="list-group-item"><a href="<?= ASSET_ROOT ?>/patient/editprofile" class="btn btn-primary">Edit</a></li>
        </ul>
    </div>
</div>