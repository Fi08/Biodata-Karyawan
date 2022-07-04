<h1 class="h3 mb-4 text-gray-800">Keluarga</h1>
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

<div class="my-2">
    <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exampleModal">

        <span class="text">Tambah Keluarga</span>
    </a>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Tanggal Lahir</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomer Telpon</th>
                        <th>Hubungan</th>
                        <th>BPJS Kesehatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($keluarga as $dataKeluarga) : ?>
                        <?php $id = $dataKeluarga['id_keluarga'];
                        ?>

                        <tr>
                            <td><?= $dataKeluarga['nama_keluarga']; ?></td>
                            <td><?= $dataKeluarga['tgl_keluarga']; ?></td>
                            <td><?= $dataKeluarga['umur_keluarga']; ?></td>
                            <td><?= $dataKeluarga['jenis_keluarga']; ?></td>
                            <td><?= $dataKeluarga['nomortlp']; ?></td>
                            <td><?= $dataKeluarga['hubungan_keluarga']; ?></td>
                            <td><?= $dataKeluarga['bpjs_kesehatan']; ?></td>
                            <td>
                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#<?= $id ?>">Edit</a>
                                <a href="?page=hapus&id_k=<?= $id ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                                <div class="modal fade" id="<?= $id ?>" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newSubMenuModalLabel">Edit Keluarga</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="edit.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input hidden type="text" class="form-control" id="id" name="id" placeholder="Nama" value="<?= $id ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" placeholder="Nama" value="<?= $dataKeluarga['nama_keluarga']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="date" class="form-control" id="tgl_keluarga" name="tgl_keluarga" placeholder="Tanggal Lahir" value="<?= $dataKeluarga['tgl_keluarga']; ?>">
                                                    </div>

                                                    <div class="form-group" hidden>
                                                        <input type="text" class="form-control" id="umur_keluarga" name="umur_keluarga" placeholder="Umur" readonly value="<?= $dataKeluarga['umur_keluarga']; ?>" ?>>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control" id="jenis_keluarga" name="jenis_keluarga">
                                                            <option value="<?= $dataKeluarga['jenis_keluarga']; ?>" hidden><?= $dataKeluarga['jenis_keluarga']; ?></option>
                                                            <option value="Laki-Laki" id="jenis_keluarga" name="jenis_keluarga">Laki-Laki</option>
                                                            <option value="Perempuan" id="jenis_keluarga" name="jenis_keluarga">Perempuan</option>
                                                        </select>
                                                    </div>



                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="nomortlp" name="nomortlp" placeholder="Nomor Telephone Keluarga" value="<?= $dataKeluarga['nomortlp']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input onkeypress="return onlynumber(event)" maxlength="13" minlength="13" type="text" class="form-control" id="bpjs_kesehatan" name="bpjs_kesehatan" placeholder="Bpjs Kesehatan" value="<?= $dataKeluarga['bpjs_kesehatan']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control" id="hubungan_keluarga" name="hubungan_keluarga">
                                                            <option value="<?= $dataKeluarga['hubungan_keluarga']; ?>" hidden><?= $dataKeluarga['hubungan_keluarga']; ?></option>
                                                            <option value="Kepala Keluarga" id="hubungan_keluarga" name="hubungan_keluarga">Kepala Keluarga</option>
                                                            <option value="Istri" id="hubungan_keluarga" name="hubungan_keluarga">Istri</option>
                                                            <option value="Anak" id="hubungan_keluarga" name="hubungan_keluarga">Anak</option>
                                                        </select>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- MODAL -->
<!-- TAMBAH -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Aksi.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_keluarga" name="nama_keluarga" placeholder="Nama">
                    </div>

                    <div class="form-group">
                        <input type="date" class="form-control" id="tgl_keluarga" name="tgl_keluarga" placeholder="Tanggal Lahir">
                    </div>

                    <div class="form-group" hidden>
                        <input type="text" class="form-control" id="umur_keluarga" name="umur_keluarga" placeholder="Umur" readonly>
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="jenis_keluarga" name="jenis_keluarga">
                            <option value="Laki-Laki" id="jenis_keluarga" name="jenis_keluarga">Laki-Laki</option>
                            <option value="Perempuan" id="jenis_keluarga" name="jenis_keluarga">Perempuan</option>
                    </div>

                    <div>
                        <input type="text" hidden>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="nomortlp" name="nomortlp" placeholder="Nomor Telephone Keluarga">
                    </div>

                    <div class="form-group">
                        <input onkeypress="return onlynumber(event)" maxlength="13" minlength="13" type="text" class="form-control" id="bpjs_kesehatan" name="bpjs_kesehatan" placeholder="Bpjs Kesehatan">
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="hubungan_keluarga" name="hubungan_keluarga">
                            <option value="Kepala Keluarga" id="hubungan_keluarga" name="hubungan_keluarga">Kepala Keluarga</option>
                            <option value="Istri" id="hubungan_keluarga" name="hubungan_keluarga">Istri</option>
                            <option value="Anak" id="hubungan_keluarga" name="hubungan_keluarga">Anak</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>