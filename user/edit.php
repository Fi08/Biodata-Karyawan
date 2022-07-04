<h1 class="h3 mb-4 text-gray-800">Edit Picture</h1>

<div class="row">
    <div class="col-lg-8">
        <form action="prosesUpdate.php" enctype="multipart/form-data" method="post" accept-charset="utf-8">
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Nomor Identitas Karyawan</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email'] ?>" readonly>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-4">Picture</div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="aset/<?= $user['foto'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <label for="image">Pilih Foto Anda</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <button type="submit" name="button" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>