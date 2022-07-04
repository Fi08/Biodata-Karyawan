<h1 class="h3 mb-4 text-gray-800">Tambah Karyawan</h1>

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

<div class="row">
    <div class="col-lg-6">
        <form action="Aksi.php" method="post">
            <div class="form-group">
                <label for="emailbaru">NIK Pegawai</label>
                <input type="text" class="form-control" id="emailbaru" name="emailbaru" required maxlength="8" minlength="8">
            </div>

            <div class="form-group">
                <label for="nama">Nama Pegawai</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create New Employee</button>
            </div>
        </form>
    </div>
</div>