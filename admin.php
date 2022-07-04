<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">PT NIPPIUN INDONESIA</h6>
    </div>
    <div class="card-body">
        <div class="text-center">
            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 10rem;" src="aset/img/nippisun.png" alt="PT NIPISSUN INDONESIA">
        </div>
        <p>Tahun Berdiri : 28 November 1993</p>
        <p>Alamat Perusahaan : 1-1 Block I Kawasan Industri MM2100 sCikarang Barat, Bekasi 17520 Jawa Barat</p>
        <p>Telepon : (021) 8410945</p>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Statitik</h6>
    </div>

    <?php
    $jkPL = count(mysqli_fetch_all(mysqli_query($con, "SELECT jk FROM user")));
    $laki = count(mysqli_fetch_all(mysqli_query($con, "SELECT jk FROM user WHERE jk = 'Laki-laki'")));
    $perempuan = count(mysqli_fetch_all(mysqli_query($con, "SELECT jk FROM user WHERE jk = 'Perempuan'")));


    $statLaki = floor($laki / 201 * 100);
    $statPerempuan = floor($perempuan / 201 * 100);
    ?>
    <div class="card-body">
        <h4 class="small font-weight-bold">Total Karyawan <?= $laki + $perempuan; ?></span></h4>
        <hr>
        <h4 class="small font-weight-bold">Laki-Laki <span class="float-right"><?= $statLaki ?>%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: <?= $statLaki ?>%" aria-valuenow="<?= $statLaki ?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <h4 class="small font-weight-bold">Perempuan<span class="float-right"><?= $statPerempuan ?>%</span></h4>
        <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: <?= $statPerempuan ?>%" aria-valuenow="<?= $statPerempuan ?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

    </div>
</div>