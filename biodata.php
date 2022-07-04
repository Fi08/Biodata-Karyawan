<?php
$id = $_GET['id_as'];
$karyawan = mysqli_query($con, "SELECT * FROM user WHERE email = '$id'");
$datakaryawan = mysqli_fetch_array($karyawan);

?>


<h1 class="h3 mb-4 text-gray-800">My Profile</h1>
<div class="card mb-3 col-lg-8">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="aset/<?= $datakaryawan['foto'] ?>" class="card-img">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><?= $datakaryawan['name'] ?></h5>
                <p class="card-text"><?= $datakaryawan['tempat_lahir'] ?> <?= $datakaryawan['tanggal_lahir'] ?></p>
                <p class="card-text"><?= $datakaryawan['bagian'] ?></p>
                <p class="card-text"><?= $datakaryawan['dept'] ?></p>
                <p class="card-text">Nomor Telepon <?= $datakaryawan['hp'] ?></p>


            </div>
        </div>
    </div>
</div>