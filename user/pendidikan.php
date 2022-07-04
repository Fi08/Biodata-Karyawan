<h1 class="h3 mb-4 text-gray-800">Pendidikan</h1>
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
                        <th>Badan Pendidikan</th>
                        <th>Tingkat Pendidikan</th>
                        <th>Juruasan</th>
                        <th>Tahun Lulus</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($penfor as $dataPenfor) : ?>
                        <?php $id = $dataPenfor['id_pendidikan'];
                        ?>

                        <tr>
                            <td><?= $dataPenfor['namabadanp']; ?></td>
                            <td><?= $dataPenfor['tingkat_pendidikan']; ?></td>
                            <td><?= $dataPenfor['jurusan']; ?></td>
                            <td><?= $dataPenfor['tahun_kelulusan']; ?></td>
                            <td>
                                <a href="#" class="badge badge-success" data-toggle="modal" data-target="#<?= $id ?>">Edit</a>
                                <a href="?page=hapus&id_p=<?= $id ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>

                                <div class="modal fade" id="<?= $id ?>" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="newSubMenuModalLabel">Edit Pendidikan</h5>
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
                                                        <input type="text" class="form-control" id="namabadanp" name="namabadanp" placeholder="Nama Badan Pendidikan" value="<?= $dataPenfor['namabadanp']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan">
                                                            <option hidden value="<?= $dataPenfor['tingkat_pendidikan']; ?>" id="tingkat_pendidikan" name="tingkat_pendidikan"><?= $dataPenfor['tingkat_pendidikan']; ?></option>

                                                            <option value="SMA" id="tingkat_pendidikan" name="tingkat_pendidikan">SMA</option>
                                                            <option value="SMK" id="tingkat_pendidikan" name="tingkat_pendidikan">SMK</option>
                                                            <option value="D3" id="tingkat_pendidikan" name="tingkat_pendidikan">D3</option>
                                                            <option value="S1" id="tingkat_pendidikan" name="tingkat_pendidikan">S1</option>
                                                            <option value="S2" id="tingkat_pendidikan" name="tingkat_pendidikan">S2</option>
                                                            <option value="S3" id="tingkat_pendidikan" name="tingkat_pendidikan">S3</option>
                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan" value="<?= $dataPenfor['jurusan']; ?>">
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun Lulus" value="<?= $dataPenfor['tahun_kelulusan']; ?>">
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
                <h5 class="modal-title" id="newSubMenuModalLabel">Tambah Pendidikan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="Aksi.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="namabadanp" name="namabadanp" placeholder="Nama Badan Pendidikan">
                    </div>

                    <div class="form-group">
                        <select class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan">

                            <option value="SMA" id="tingkat_pendidikan" name="tingkat_pendidikan">SMA</option>
                            <option value="SMK" id="tingkat_pendidikan" name="tingkat_pendidikan">SMK</option>
                            <option value="D3" id="tingkat_pendidikan" name="tingkat_pendidikan">D3</option>
                            <option value="S1" id="tingkat_pendidikan" name="tingkat_pendidikan">S1</option>
                            <option value="S2" id="tingkat_pendidikan" name="tingkat_pendidikan">S2</option>
                            <option value="S3" id="tingkat_pendidikan" name="tingkat_pendidikan">S3</option>
                        </select>
                    </div>



                    <div class="form-group">
                        <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Jurusan">
                    </div>

                    <div class="form-group">
                        <input type="number" class="form-control" id="tahun" name="tahun" placeholder="Tahun Lulus">
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