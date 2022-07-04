<h1 class="h3 mb-4 text-gray-800">Pendidikan Non Formal</h1>
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
        <span class="text">Tambah Pendidikan Formal</span>
    </a>
</div>
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Lembaga</th>
                        <th>Kursus</th>
                        <th>Tahun</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($nonpenfor as $dataNonPenfor) : ?>
                        <?php $id = $dataNonPenfor['id_nonformal'];
                        ?>

                        <tr>
                            <td><?= $dataNonPenfor['nama_lembaga']; ?></td>
                            <td><?= $dataNonPenfor['kursus']; ?></td>
                            <td><?= $dataNonPenfor['tahun']; ?></td>
                            <td><?= $dataNonPenfor['keterangan']; ?></td>
                            <td>
                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#<?= $id ?>">Edit</a>
                                <a href="?page=hapus&id_np=<?= $id ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>

                                <div class="modal fade" id="<?= $id ?>" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newSubMenuModalLabel">Edit Pendidikan Non Formal</h5>
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
                                                        <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" placeholder="Nama Lembaga" value="<?= $dataNonPenfor['nama_lembaga']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="kursus" name="kursus" placeholder="Kursus / Pelatihan" value="<?= $dataNonPenfor['kursus']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun" value="<?= $dataNonPenfor['tahun']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Deskripsi" value="<?= $dataNonPenfor['keterangan']; ?>">
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Pendidikan Non Formal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Aksi.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="nama_lembaga" name="nama_lembaga" placeholder="Nama Lembaga">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="kursus" name="kursus" placeholder="Kursus / Pelatihan">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Deskripsi">
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