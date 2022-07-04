<h1 class="h3 mb-4 text-gray-800">Relasi</h1>

<div class=" row">
    <div class="col-lg-6">
        <form action="../user.php" method="post">

            <div class="form-group">
                <label for="formGroupExampleInput">Nama Relasi</label>
                <input type="text" class="form-control" id="nama_relasi" name="nama_relasi" placeholder="Nomor Telephone" value="<?= $user['nama_relasi'] ?>">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Nomor Telephone</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telephone" value="<?= $user['tlp_relasi'] ?>">
            </div>



            <div class="form-group">
                <h4>Alamat KTP</h4>
                <div class="form-row">

                    <div class="col">
                        <label for="formGroupExampleInput">Jalan</label>
                        <input type="text" class="form-control" id="kp" name="kp" placeholder="Jalan / Rw / Rt" value="<?= $user['jalan_relasi'] ?>">
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan_relasi" name="kelurahan_relasi" placeholder="Kelurahan Relasi" value="<?= $user['kelurahan_relasi'] ?>">
                        </div>

                        <div class="col">
                            <label for="formGroupExampleInput">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan_relasi" name="kecamatan_relasi" placeholder="Kecamatan Relasi" value="<?= $user['kecamatan_relasi'] ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Kota / Kabupaten</label>
                            <input type="text" class="form-control" id="kota_relasi" name="kota_relasi" placeholder="Kota / Kabupaten relasi" value="<?= $user['kota_relasi'] ?>">
                        </div>

                        <div class="col">
                            <label for="formGroupExampleInput">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi_relasi" name="provinsi_relasi" placeholder="Provinsi Relasi" value="<?= $user['provinsi_relasi'] ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Relasi Dari</label>
                    <input type="text" class="form-control" id="dari_relasi" name="dari_relasi" placeholder="Relasi Dari" value="<?= $user['dari_relasi'] ?>">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan_relasi" name="jabatan_relasi" placeholder="Jabatan Relasi" value="<?= $user['jabatan'] ?>">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
        </form>
    </div>
</div>