<?php
// GAPAKE INI
$id = $_GET['id_k'];
$edit_keluarga = mysqli_query($con, "SELECT * FROM `keluarga` WHERE id_keluarga = '$id' ");
$keluargaku = mysqli_fetch_array($edit_keluarga);
?>

<h1 class="h3 mb-4 text-gray-800">Edit Keluarga</h1>
<form action="Aksi.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" placeholder="Nama" value="<?= $keluargaku['nama_keluarga'] ?>">
    </div>

    <div class="form-group">
        <input type="date" class="form-control" id="tgl_keluarga" name="tgl_keluarga" placeholder="Tanggal Lahir" value="<?= $keluargaku['tgl_keluarga'] ?>">
    </div>

    <div class="form-group">
        <select class="form-control" id="jenis_keluarga" name="jenis_keluarga">
            <option value="<?= $keluargaku['jenis_keluarga'] ?>" id="jenis_keluarga" name="jenis_keluarga" hidden><?= $keluargaku['jenis_keluarga'] ?></option>

            <option value="Laki-Laki" id="jenis_keluarga" name="jenis_keluarga">Laki-Laki</option>
            <option value="Perempuan" id="jenis_keluarga" name="jenis_keluarga">Perempuan</option>
    </div>

    <div>
        <input type="text" hidden>
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="nomortlp" name="nomortlp" placeholder="Nomor Telephone Keluarga" value="<?= $keluargaku['nomortlp'] ?>">
    </div>

    <div class="form-group">
        <input onkeypress="return onlynumber(event)" maxlength="13" minlength="13" type="text" class="form-control" id="bpjs_kesehatan" name="bpjs_kesehatan" placeholder="Bpjs Kesehatan" value="<?= $keluargaku['bpjs_kesehatan'] ?>">
    </div>

    <div class="form-group">
        <select class="form-control" id="hubungan_keluarga" name="hubungan_keluarga">
            <option value="<?= $keluargaku['hubungan_keluarga'] ?>" id="hubungan_keluarga" name="hubungan_keluarga" hidden><?= $keluargaku['hubungan_keluarga']; ?></option>

            <option value="Kepala Keluarga" id="hubungan_keluarga" name="hubungan_keluarga">Kepala Keluarga</option>
            <option value="Istri" id="hubungan_keluarga" name="hubungan_keluarga">Istri</option>
            <option value="Anak" id="hubungan_keluarga" name="hubungan_keluarga">Anak</option>
        </select>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>