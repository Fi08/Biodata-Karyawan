<?php

if (isset($_SESSION['notif'])) {
?>
    <div class="alert alert-<?= $_SESSION['Tnotif'] ?>" role="alert">
        <?= $_SESSION['notif']  ?>
    </div>
<?php
    unset($_SESSION['Tnotif']);
    unset($_SESSION['notif']);
}
?>

<h1 class="h3 mb-4 text-gray-800">My Profile</h1>
<div class="card mb-3 col-lg-8">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="aset/<?= $user['foto'] ?>" class="card-img">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $user['name'] ?></h5>
                <p class="card-text"><?= $user['tanggal_lahir'] ?></p>
                <p class="card-text"><?= $user['bagian'] ?></p>
                <p class="card-text"><?= $user['dept'] ?></p>
                <p class hidden="card-text"><small class="text-muted">joined since 08 November 2020</small></p>
            </div>
        </div>
    </div>
</div>