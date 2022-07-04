<h1 class="h3 mb-4 text-gray-800">Riwayat</h1>
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
        <span class="text">Tambah Riwayat</span>
    </a>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Perusahaan</th>
                        <th>Jabatan</th>
                        <th>Bagian</th>
                        <th>resign</th>
                        <th>Periode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($riwayat as $dataRiwayat) : ?>
                        <?php $id = $dataRiwayat['id_riwayat'];
                        ?>

                        <tr>
                            <td><?= $dataRiwayat['nama_perusahaan']; ?></td>
                            <td><?= $dataRiwayat['jabatan']; ?></td>
                            <td><?= $dataRiwayat['bagian']; ?></td>
                            <td><?= $dataRiwayat['resign']; ?></td>
                            <td><?= $dataRiwayat['periode1']; ?> s/d <?= $dataRiwayat['periode2']; ?></td>
                            <td>
                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#<?= $id ?>">Edit</a>
                                <a href="?page=hapus&id_r=<?= $id ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>

                                <div class="modal fade" id="<?= $id ?>" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newSubMenuModalLabel">Edit Riwayat Pekerjaan</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="edit.php" method="post">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <input hidden type="text" class="form-control" id="id" name="id" placeholder="" value="<?= $id ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan" value="<?= $dataRiwayat['nama_perusahaan']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan" value="<?= $dataRiwayat['jabatan']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian" value="<?= $dataRiwayat['bagian']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="resign" name="resign" placeholder="Alasan Resign" value="<?= $dataRiwayat['resign']; ?>">
                                                    </div>

                                                    <div class="form-group">

                                                        <span>Awal Bekerja</span>

                                                        <input type="date" class="form-control" id="periode1" name="periode1" placeholder="Masuk" value="<?= $dataRiwayat['periode1']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <span>Akhir Bekerja</span>

                                                        <input type="date" class="form-control" id="periode2" name="periode2" placeholder="Keluar" value="<?= $dataRiwayat['periode2']; ?>">
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Riwayat Pekerjaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Aksi.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama Perusahaan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="bagian" name="bagian" placeholder="Bagian">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="resign" name="resign" placeholder="Alasan Resign">
                    </div>

                    <div class="form-group">

                        <span>Awal Bekerja</span>

                        <input type="date" class="form-control" id="periode1" name="periode1" placeholder="Masuk">
                    </div>

                    <div class="form-group">
                        <span>Akhir Bekerja</span>

                        <input type="date" class="form-control" id="periode2" name="periode2" placeholder="Keluar">
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