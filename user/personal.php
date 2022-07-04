<h1 class="h3 mb-4 text-gray-800">Personal</h1>

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

<div class=" row">
    <div class="col-lg-6">
        <form action="prosesUpdate.php" method="post">
            <div class="form-group">
                <label for="formGroupExampleInput">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Fulll Name" value="<?= $user['name'] ?>">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= $user['tempat_lahir'] ?>">
            </div>


            <div class="form-row">
                <div class="col-6">
                    <label for="formGroupExampleInput">Tanggal Lahir</label>
                    <input type="date" class="form-control" onchange="getAge()" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $user['tanggal_lahir'] ?>">
                </div>

            </div>
            <br>
            <h5>umur</h5>
            <div class="form-row">

                <div class="col">
                    <h4 id="umur" class="text-primary"></h4>
                </div>

                <div class="col-11">
                    <input type="text" class="form-control" id="umur" name="umur" placeholder="Umur" value="<?= $user['umur'] ?>" readonly>
                </div>
            </div>
            <br>

            <div class="form-group">
                <label for="formGroupExampleInput">Gender</label>
                <select class="form-control" id="jk" name="jk">
                    <option hidden value="<?= $user['jk'] ?>" id="jk" name="jk"><?= $user['jk'] ?></option>
                    <option value="Laki-Laki" id="jk" name="jk">Laki-Laki</option>
                    <option value="Perempuan" id="jk" name="jk">Perempuan</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Nomor Handphone</label>
                <input type="text" class="form-control" id="hp" name="hp" placeholder="Nomor Handphone" value="<?= $user['hp'] ?>">
            </div>


            <div class="form-group">
                <label for="formGroupExampleInput">Nomor Telephone</label>
                <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Nomor Telephone" value="<?= $user['telepon'] ?>">
            </div>


            <div class="form-group">
                <h4>Alamat KTP</h4>
                <div class="form-row">
                    <div class="col">
                        <label for="formGroupExampleInput">Jalan</label>
                        <input type="text" class="form-control" id="jalan" name="jalan" placeholder="Jalan / Rw / Rt" value="<?= $user['jalan'] ?>">
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="Kelurahan" value="<?= $user['kelurahan'] ?>">
                        </div>

                        <div class="col">
                            <label for="formGroupExampleInput">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" value="<?= $user['kecamatan'] ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Kota / Kabupaten</label>
                            <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota / Kabupaten" value="<?= $user['kota'] ?>">
                        </div>

                        <div class="col">
                            <label for="formGroupExampleInput">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" value="<?= $user['provinsi'] ?>">
                        </div>
                    </div>
                </div>

                <h4>Alamat Sekarang</h4>
                <div class="form-group">
                    <label for="formGroupExampleInput">Tap Jika Alamat sama dengan KTP</label>
                    <input class="form-control" type="checkbox" name="is_active" id="is_active" onclick="getAndSetVal();">
                </div>
            </div>

            <div class="form-group">
                <div class="form-row">
                    <div class="col">
                        <label for="formGroupExampleInput">Jalan</label>
                        <input type="text" class="form-control" id="jalan_skrg" name="jalan_skrg" placeholder="Jalan / Rw / Rt" value="<?= $user['jalan_skrg'] ?>">
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Kelurahan</label>
                            <input type="text" class="form-control" id="kelurahan_skrg" name="kelurahan_skrg" placeholder="Kelurahan sekarang" value="<?= $user['kelurahan_skrg'] ?>">
                        </div>

                        <div class="col">
                            <label for="formGroupExampleInput">Kecamatan</label>
                            <input type="text" class="form-control" id="kecamatan_skrg" name="kecamatan_skrg" placeholder="Kecamatan" value="<?= $user['kecamatan_skrg'] ?>">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-row">
                        <div class="col">
                            <label for="formGroupExampleInput">Kota / Kabupaten</label>
                            <input type="text" class="form-control" id="kota_skrg" name="kota_skrg" placeholder="Kota / Kabupaten Sekarang" value="<?= $user['kota_skrg'] ?>">
                        </div>

                        <div class="col">
                            <label for="formGroupExampleInput">Provinsi</label>
                            <input type="text" class="form-control" id="provinsi_skrg" name="provinsi_skrg" placeholder="Provinsi Sekarang" value="<?= $user['provinsi_skrg'] ?>">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                function getAndSetVal() {
                    var jalan = document.getElementById('jalan').value;
                    document.getElementById('jalan_skrg').value = jalan;
                    var kota = document.getElementById('kota').value;
                    document.getElementById('kota_skrg').value = kota;
                    var provinsi = document.getElementById('provinsi').value;
                    document.getElementById('provinsi_skrg').value = provinsi;
                    var kecamatan = document.getElementById('kecamatan').value;
                    document.getElementById('kecamatan_skrg').value = kecamatan;
                    var kelurahan = document.getElementById('kelurahan').value;
                    document.getElementById('kelurahan_skrg').value = kelurahan;
                }
            </script>

            <br>
            <div class="form-group">
                <h4>Tanda Pengenal</h4>
                <label for="formGroupExampleInput">Nomor KTP </label>
                <input type="text" maxlength="16" minlength="16" class="form-control" id="nomorktp" name="nomorktp" placeholder="Nomor KTP" value="<?= $user['nomorktp'] ?>">
                <br>
                <label for="formGroupExampleInput">Nomer Kartu Keluarga</label>
                <input type="text" class="form-control" id="nomerkk" name="nomerkk" placeholder="Nomer Kartu Keluarga" value="<?= $user['nomerkk'] ?>">

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">SIM</label>
                <input type="text" class="form-control" id="nomorsim" name="nomorsim" placeholder="Nomor SIM" value="<?= $user['nomorsim'] ?>">

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Pilih Status</label>
                <select class="form-control" id="status" name="status">
                    <option hidden value="<?= $user['status'] ?>" id="status" name="status"><?= $user['status'] ?></option>
                    <option value="Lajang" id="status" name="status">Lajang</option>
                    <option value="Menikah" id="status" name="status">Menikah</option>
                    <option value="Duda" id="status" name="status">Duda</option>
                    <option value="Janda" id="status" name="status">Janda</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Agama</label>
                <select class="form-control" id="agama" name="agama">
                    <option hidden value="<?= $user['agama'] ?>" id="agama" name="agama"><?= $user['agama'] ?></option>
                    <option value="Budha" id="agama" name="agama">Budha</option>
                    <option value="Hindu" id="agama" name="agama">Hindu</option>
                    <option value="Islam" id="agama" name="agama">Islam</option>
                    <option value="Katholik" id="agama" name="agama">Katholik</option>
                    <option value="Kong Hu Chu" id="agama" name="agama">Kong Hu Chu</option>
                    <option value="Kristen" id="agama" name="agama">Kristen</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">NPWP</label>
                <input type="text" class="form-control" id="npwp" name="npwp" placeholder="npwp" value="<?= $user['npwp'] ?>">

            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">Nomor Rekening / Nama Bank</label>
                <div class="input-group">
                    <input type="text" id="norekening" name="norekening" aria-label="First name" class="form-control" placeholder="Nomor Rekening" value="<?= $user['norekening'] ?>">
                    <div class="form-group">
                        <select class="form-control" id="bank" name="bank">
                            <option hidden value="<?= $user['bank'] ?>" id="bank" name="bank"><?= $user['bank'] ?></option>
                            <option value="Anglomas Internasional Bank" id="bank" name="bank">Anglomas Internasional Bank</option>
                            <option value="Bank Aceh" id="bank" name="bank">Bank Aceh</option>
                            <option value="Bank Agris" id="bank" name="bank">Bank Agris</option>
                            <option value="Bank Agroniaga, Tbk." id="bank" name="bank">Bank Agroniaga, Tbk.</option>
                            <option value="Bank Andara" id="bank" name="bank">Bank Andara</option>
                            <option value="Bank Antardaerah" id="bank" name="bank">Bank Antardaerah</option>
                            <option value="Bank ANZ Indonesia" id="bank" name="bank">Bank ANZ Indonesia</option>
                            <option value="Bank Artha Graha Internasional, Tbk" id="bank" name="bank">Bank Artha Graha Internasional, Tbk</option>
                            <option value="Bank Artos Indonesia" id="bank" name="bank">Bank Artos Indonesia</option>
                            <option value="Bank Bca Syariah" id="bank" name="bank">Bank Bca Syariah</option>
                            <option value="Bank Bisnis Internasional" id="bank" name="bank">Bank Bisnis Internasional</option>
                            <option value="Bank BNI Syariah" id="bank" name="bank">Bank BNI Syariah</option>
                            <option value="Bank BNP Paribas Indonesia" id="bank" name="bank">Bank BNP Paribas Indonesia</option>
                            <option value="Bank Bri Syariah" id="bank" name="bank">Bank Bri Syariah</option>
                            <option value="Bank Bukopin, Tbk" id="bank" name="bank">Bank Bukopin, Tbk</option>
                            <option value="Bank Bumi Arta, Tbk" id="bank" name="bank">Bank Bumi Arta, Tbk</option>
                            <option value="Bank Capital Indonesia, Tbk" id="bank" name="bank">Bank Capital Indonesia, Tbk</option>
                            <option value="Bank Central Asia Tbk.(BCA)" id="bank" name="bank">Bank Central Asia Tbk.(BCA)</option>
                            <option value="Bank China Trust Indonesia" id="bank" name="bank">Bank China Trust Indonesia</option>
                            <option value="Bank Cimb Niaga, Tbk" id="bank" name="bank">Bank Cimb Niaga, Tbk</option>
                            <option value="Bank Commonwealth" id="bank" name="bank">Bank Commonwealth</option>
                            <option value="Bank Danamon" id="bank" name="bank">Bank Danamon</option>
                            <option value="Bank Danamon Indonesia Tbk" id="bank" name="bank">Bank Danamon Indonesia Tbk</option>
                            <option value="Bank DBS Indonesia" id="bank" name="bank">Bank DBS Indonesia</option>
                            <option value="Bank DKI" id="bank" name="bank">Bank DKI</option>
                            <option value="Bank DKI" id="bank" name="bank">Bank DKI</option>
                            <option value="Bank Ekonomi Raharja, Tbk" id="bank" name="bank">Bank Ekonomi Raharja, Tbk</option>
                            <option value="Bank Fama Internasional" id="bank" name="bank">Bank Fama Internasional</option>
                            <option value="Bank Ganesha" id="bank" name="bank">Bank Ganesha</option>
                            <option value="Bank Hana" id="bank" name="bank">Bank Hana</option>
                            <option value="Bank Harda Internasional" id="bank" name="bank">Bank Harda Internasional</option>
                            <option value="Bank Himpunan Saudara 1906, Tbk" id="bank" name="bank">Bank Himpunan Saudara 1906, Tbk</option>
                            <option value="Bank ICB Bumiputera Tbk" id="bank" name="bank">Bank ICB Bumiputera Tbk</option>
                            <option value="Bank ICBC Indonesia" id="bank" name="bank">Bank ICBC Indonesia</option>
                            <option value="Bank Ina Perdana" id="bank" name="bank">Bank Ina Perdana</option>
                            <option value="Bank Index Selindo" id="bank" name="bank">Bank Index Selindo</option>
                            <option value="Bank Indonesia (Bank Sentral)" id="bank" name="bank">Bank Indonesia (Bank Sentral)</option>
                            <option value="Bank Internasional Indonesia (BII)" id="bank" name="bank">Bank Internasional Indonesia (BII)</option>
                            <option value="Bank Internasional Indonesia Tbk" id="bank" name="bank">Bank Internasional Indonesia Tbk</option>
                            <option value="Bank Jabar Banten Syariah" id="bank" name="bank">Bank Jabar Banten Syariah</option>
                            <option value="Bank Jabar Banten, Tbk (BJB)" id="bank" name="bank">Bank Jabar Banten, Tbk (BJB)</option>
                            <option value="Bank Jasa Jakarta" id="bank" name="bank">Bank Jasa Jakarta</option>
                            <option value="Bank Jateng ( dahulu BPD Jawa Tengah )" id="bank" name="bank">Bank Jateng ( dahulu BPD Jawa Tengah )</option>
                            <option value="Bank Jatim (dahulu bernama BPD Jawa Timur)" id="bank" name="bank">Bank Jatim (dahulu bernama BPD Jawa Timur)</option>
                            <option value="Bank Kalimantan Tengah" id="bank" name="bank">Bank Kalimantan Tengah</option>
                            <option value="Bank KEB Indonesia" id="bank" name="bank">Bank KEB Indonesia</option>
                            <option value="Bank Kesejahteraan Ekonomi" id="bank" name="bank">Bank Kesejahteraan Ekonomi</option>
                            <option value="Bank Lampung" id="bank" name="bank">Bank Lampung</option>
                            <option value="Bank Mandiri" id="bank" name="bank">Bank Mandiri</option>
                            <option value="Bank Maspion Indonesia" id="bank" name="bank">Bank Maspion Indonesia</option>
                            <option value="Bank Mayapada International Tbk" id="bank" name="bank">Bank Mayapada International Tbk</option>
                            <option value="Bank Maybank Syariah Indonesia" id="bank" name="bank">Bank Maybank Syariah Indonesia</option>
                            <option value="Bank Mayora" id="bank" name="bank">Bank Mayora</option>
                            <option value="Bank Mega, Tbk" id="bank" name="bank">Bank Mega, Tbk</option>
                            <option value="Bank Mestika Dharma" id="bank" name="bank">Bank Mestika Dharma</option>
                            <option value="Bank Metro Express" id="bank" name="bank">Bank Metro Express</option>
                            <option value="Bank Mitraniaga" id="bank" name="bank">Bank Mitraniaga</option>
                            <option value="Bank Mizuho Indonesia" id="bank" name="bank">Bank Mizuho Indonesia</option>
                            <option value="Bank Muamalat Indonesia" id="bank" name="bank">Bank Muamalat Indonesia</option>
                            <option value="Bank Multi Arta Sentosa" id="bank" name="bank">Bank Multi Arta Sentosa</option>
                            <option value="Bank Mutiara, Tbk" id="bank" name="bank">Bank Mutiara, Tbk</option>
                            <option value="Bank Negara Indonesia" id="bank" name="bank">Bank Negara Indonesia</option>
                            <option value="Bank Nusantara Parahyangan,Tbk" id="bank" name="bank">Bank Nusantara Parahyangan,Tbk</option>
                            <option value="Bank OCBC NISP, Tbk" id="bank" name="bank">Bank OCBC NISP, Tbk</option>
                            <option value="Bank Of America, N.A" id="bank" name="bank">Bank Of America, N.A</option>
                            <option value="Bank Of China Limited" id="bank" name="bank">Bank Of China Limited</option>
                            <option value="Bank Of India Indonesia, Tbk" id="bank" name="bank">Bank Of India Indonesia, Tbk</option>
                            <option value="Bank Panin Syariah" id="bank" name="bank">Bank Panin Syariah</option>
                            <option value="Bank Permata" id="bank" name="bank">Bank Permata</option>
                            <option value="Bank Permata Tbk" id="bank" name="bank">Bank Permata Tbk</option>
                            <option value="Bank Pundi Indonesia, Tbk" id="bank" name="bank">Bank Pundi Indonesia, Tbk</option>
                            <option value="Bank Rabobank International Indonesia" id="bank" name="bank">Bank Rabobank International Indonesia</option>
                            <option value="Bank Rakyat Indonesia" id="bank" name="bank">Bank Rakyat Indonesia</option>
                            <option value="Bank Resona Perdania" id="bank" name="bank">Bank Resona Perdania</option>
                            <option value="Bank Royal Indonesia" id="bank" name="bank">Bank Royal Indonesia</option>
                            <option value="Bank Sahabat Purba Danarta" id="bank" name="bank">Bank Sahabat Purba Danarta</option>
                            <option value="Bank Sahabat Sampoerna" id="bank" name="bank">Bank Sahabat Sampoerna</option>
                            <option value="Bank SBI Indonesia" id="bank" name="bank">Bank SBI Indonesia</option>
                            <option value="Bank Sinar Harapan Bali" id="bank" name="bank">Bank Sinar Harapan Bali</option>
                            <option value="Bank Sinarmas" id="bank" name="bank">Bank Sinarmas</option>
                            <option value="Bank Sinarmas, Tbk" id="bank" name="bank">Bank Sinarmas, Tbk</option>
                            <option value="Bank Sumitomo Mitsui Indonesia" id="bank" name="bank">Bank Sumitomo Mitsui Indonesia</option>
                            <option value="Bank Syariah Bukopin" id="bank" name="bank">Bank Syariah Bukopin</option>
                            <option value="Bank Syariah Mandiri" id="bank" name="bank">Bank Syariah Mandiri</option>
                            <option value="Bank Syariah Mega Indonesia" id="bank" name="bank">Bank Syariah Mega Indonesia</option>
                            <option value="Bank Tabungan Negara" id="bank" name="bank">Bank Tabungan Negara</option>
                            <option value="Bank Tabungan Pensiunan Nasional (BTPN)" id="bank" name="bank">Bank Tabungan Pensiunan Nasional (BTPN)</option>
                            <option value="Bank Tabungan Pensiunan Nasional, Tbk" id="bank" name="bank">Bank Tabungan Pensiunan Nasional, Tbk</option>
                            <option value="Bank UOB Indonesia (Dahulu Uob Buana)" id="bank" name="bank">Bank UOB Indonesia (Dahulu Uob Buana)</option>
                            <option value="Bank Victoria International, Tbk" id="bank" name="bank">Bank Victoria International, Tbk</option>
                            <option value="Bank Victoria Syariah" id="bank" name="bank">Bank Victoria Syariah</option>
                            <option value="Bank Windu Kentjana International, Tbk" id="bank" name="bank">Bank Windu Kentjana International, Tbk</option>
                            <option value="Bank Woori Indonesia" id="bank" name="bank">Bank Woori Indonesia</option>
                            <option value="Bank Yudha Bhakti" id="bank" name="bank">Bank Yudha Bhakti</option>
                            <option value="BPD Bali" id="bank" name="bank">BPD Bali</option>
                            <option value="BPD Banda Aceh" id="bank" name="bank">BPD Banda Aceh</option>
                            <option value="BPD Bengkulu" id="bank" name="bank">BPD Bengkulu</option>
                            <option value="BPD DIY" id="bank" name="bank">BPD DIY</option>
                            <option value="BPD Jambi" id="bank" name="bank">BPD Jambi</option>
                            <option value="BPD Jambi" id="bank" name="bank">BPD Jambi</option>
                            <option value="BPD Jawa Tengah (Jateng)" id="bank" name="bank">BPD Jawa Tengah (Jateng)</option>
                            <option value="BPD Jawa Timur (Jatim)" id="bank" name="bank">BPD Jawa Timur (Jatim)</option>
                            <option value="BPD Kalimantan Barat" id="bank" name="bank">BPD Kalimantan Barat</option>
                            <option value="BPD Kalimantan Barat (Kalbar)" id="bank" name="bank">BPD Kalimantan Barat (Kalbar)</option>
                            <option value="BPD Kalimantan Selatan" id="bank" name="bank">BPD Kalimantan Selatan</option>
                            <option value="BPD Kalimantan Selatan (Kalsel)" id="bank" name="bank">BPD Kalimantan Selatan (Kalsel)</option>
                            <option value="BPD Kalimantan Timur" id="bank" name="bank">BPD Kalimantan Timur</option>
                            <option value="BPD Kalimantan Timur (Kaltim)" id="bank" name="bank">BPD Kalimantan Timur (Kaltim)</option>
                            <option value="BPD Maluku" id="bank" name="bank">BPD Maluku</option>
                            <option value="BPD Nusa Tenggara Barat" id="bank" name="bank">BPD Nusa Tenggara Barat</option>
                            <option value="BPD Nusa Tenggara Barat (NTB)" id="bank" name="bank">BPD Nusa Tenggara Barat (NTB)</option>
                            <option value="BPD Nusa Tenggara Timur" id="bank" name="bank">BPD Nusa Tenggara Timur</option>
                            <option value="BPD Papua" id="bank" name="bank">BPD Papua</option>
                            <option value="BPD Riau" id="bank" name="bank">BPD Riau</option>
                            <option value="BPD Riau Dan Kepulauan Riau" id="bank" name="bank">BPD Riau Dan Kepulauan Riau</option>
                            <option value="BPD Sulawesi Selatan (Sulsel)" id="bank" name="bank">BPD Sulawesi Selatan (Sulsel)</option>
                            <option value="BPD Sulawesi Selatan Dan Sulawesi Barat" id="bank" name="bank">BPD Sulawesi Selatan Dan Sulawesi Barat</option>
                            <option value="BPD Sulawesi Tengah" id="bank" name="bank">BPD Sulawesi Tengah</option>
                            <option value="BPD Sulawesi Tenggara" id="bank" name="bank">BPD Sulawesi Tenggara</option>
                            <option value="BPD Sulawesi Utara" id="bank" name="bank">BPD Sulawesi Utara</option>
                            <option value="BPD Sumatera Barat" id="bank" name="bank">BPD Sumatera Barat</option>
                            <option value="BPD Sumatera Barat (Sumbar)" id="bank" name="bank">BPD Sumatera Barat (Sumbar)</option>
                            <option value="BPD Sumatera Selatan (Sumsel)" id="bank" name="bank">BPD Sumatera Selatan (Sumsel)</option>
                            <option value="BPD Sumatera Selatan Dan Bangka Belitung" id="bank" name="bank">BPD Sumatera Selatan Dan Bangka Belitung</option>
                            <option value="BPD Sumatera Utara" id="bank" name="bank">BPD Sumatera Utara</option>
                            <option value="BPD Sumatera Utara (Sumut)" id="bank" name="bank">BPD Sumatera Utara (Sumut)</option>
                            <option value="BPD Yogyakarta" id="bank" name="bank">BPD Yogyakarta</option>
                            <option value="BTN" id="bank" name="bank">BTN</option>
                            <option value="Centratama Nasional Bank" id="bank" name="bank">Centratama Nasional Bank</option>
                            <option value="CIMB Niaga" id="bank" name="bank">CIMB Niaga</option>
                            <option value="Citibank N.A." id="bank" name="bank">Citibank N.A.</option>
                            <option value="Deutsche Bank AG." id="bank" name="bank">Deutsche Bank AG.</option>
                            <option value="HSBC, Ltd." id="bank" name="bank">HSBC, Ltd.</option>
                            <option value="JP. Morgan Chase Bank, N.A." id="bank" name="bank">JP. Morgan Chase Bank, N.A.</option>
                            <option value="Liman International Bank" id="bank" name="bank">Liman International Bank</option>
                            <option value="Nationalnobu" id="bank" name="bank">Nationalnobu</option>
                            <option value="OCBC NISP" id="bank" name="bank">OCBC NISP</option>
                            <option value="Pan Indonesia Bank, Tbk" id="bank" name="bank">Pan Indonesia Bank, Tbk</option>
                            <option value="Prima Master Bank" id="bank" name="bank">Prima Master Bank</option>
                            <option value="PT Bank Jabar dan Banten" id="bank" name="bank">PT Bank Jabar dan Banten</option>
                            <option value="PT Bank Panin Syariah" id="bank" name="bank">PT Bank Panin Syariah</option>
                            <option value="PT Bank Syariah BNI" id="bank" name="bank">PT Bank Syariah BNI</option>
                            <option value="PT Bank Syariah BRI" id="bank" name="bank">PT Bank Syariah BRI</option>
                            <option value="PT Bank Syariah Bukopin" id="bank" name="bank">PT Bank Syariah Bukopin</option>
                            <option value="PT Bank Syariah Mandiri" id="bank" name="bank">PT Bank Syariah Mandiri</option>
                            <option value="PT Bank Victoria Syariah" id="bank" name="bank">PT Bank Victoria Syariah</option>
                            <option value="PT BCA Syariah" id="bank" name="bank">PT BCA Syariah</option>
                            <option value="PT Maybank Indonesia Syariah" id="bank" name="bank">PT Maybank Indonesia Syariah</option>
                            <option value="PT. Bank Syariah Mega Indonesia" id="bank" name="bank">PT. Bank Syariah Mega Indonesia</option>
                            <option value="PT. Bank Syariah Muamalat Indonesia" id="bank" name="bank">PT. Bank Syariah Muamalat Indonesia</option>
                            <option value="QNB Bank Kesawan Tbk" id="bank" name="bank">QNB Bank Kesawan Tbk</option>
                            <option value="Standard Chartered Bank" id="bank" name="bank">Standard Chartered Bank</option>
                            <option value="The Bangkok Bank Comp. Ltd" id="bank" name="bank">The Bangkok Bank Comp. Ltd</option>
                            <option value="The Bank Of Tokyo Mitsubishi UFJ Ltd" id="bank" name="bank">The Bank Of Tokyo Mitsubishi UFJ Ltd</option>
                            <option value="The Hongkong & Shanghai Banking Corp" id="bank" name="bank">The Hongkong & Shanghai Banking Corp</option>
                            <option value="The Royal Bank Of Scotland N.V." id="bank" name="bank">The Royal Bank Of Scotland N.V.</option>
                            <option value="UUS Bank Danamon" id="bank" name="bank">UUS Bank Danamon</option>
                            <option value="UUS Bank Permata" id="bank" name="bank">UUS Bank Permata</option>
                            <option value="UUS Bank Sinarmas" id="bank" name="bank">UUS Bank Sinarmas</option>
                            <option value="UUS Bank Tabungan Negara" id="bank" name="bank">UUS Bank Tabungan Negara</option>
                            <option value="UUS BEI" id="bank" name="bank">UUS BEI</option>
                            <option value="UUS BII" id="bank" name="bank">UUS BII</option>
                            <option value="UUS BNI" id="bank" name="bank">UUS BNI</option>
                            <option value="UUS BPD Banda Aceh" id="bank" name="bank">UUS BPD Banda Aceh</option>
                            <option value="UUS BPD DIY" id="bank" name="bank">UUS BPD DIY</option>
                            <option value="UUS BPD DKI" id="bank" name="bank">UUS BPD DKI</option>
                            <option value="UUS BPD Jabar dan Banten" id="bank" name="bank">UUS BPD Jabar dan Banten</option>
                            <option value="UUS BPD Jambi" id="bank" name="bank">UUS BPD Jambi</option>
                            <option value="UUS BPD Jateng" id="bank" name="bank">UUS BPD Jateng</option>
                            <option value="UUS BPD Jatim" id="bank" name="bank">UUS BPD Jatim</option>
                            <option value="UUS BPD Kalbar" id="bank" name="bank">UUS BPD Kalbar</option>
                            <option value="UUS BPD Kalsel" id="bank" name="bank">UUS BPD Kalsel</option>
                            <option value="UUS BPD Kaltim" id="bank" name="bank">UUS BPD Kaltim</option>
                            <option value="UUS BPD Nusa Tenggara Barat" id="bank" name="bank">UUS BPD Nusa Tenggara Barat</option>
                            <option value="UUS BPD Riau" id="bank" name="bank">UUS BPD Riau</option>
                            <option value="UUS BPD Sulsel" id="bank" name="bank">UUS BPD Sulsel</option>
                            <option value="UUS BPD Sumbar" id="bank" name="bank">UUS BPD Sumbar</option>
                            <option value="UUS BPD Sumsel" id="bank" name="bank">UUS BPD Sumsel</option>
                            <option value="UUS BPD Sumut" id="bank" name="bank">UUS BPD Sumut</option>
                            <option value="UUS BRI" id="bank" name="bank">UUS BRI</option>
                            <option value="UUS BTPN" id="bank" name="bank">UUS BTPN</option>
                            <option value="UUS Bukopin" id="bank" name="bank">UUS Bukopin</option>
                            <option value="UUS CIMB Niaga" id="bank" name="bank">UUS CIMB Niaga</option>
                            <option value="UUS HSBC" id="bank" name="bank">UUS HSBC</option>
                            <option value="UUS IFI" id="bank" name="bank">UUS IFI</option>
                            <option value="UUS Lippo" id="bank" name="bank">UUS Lippo</option>
                            <option value="UUS OCBC NISP" id="bank" name="bank">UUS OCBC NISP</option>

                        </select>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">No. BPJS Tenaga Kerja</label>
                <input type="text" class="form-control" id="jamsostek" name="jamsostek" placeholder="No. BPJS Tenaga Kerja" value="<?= $user['bpjs_p'] ?>">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput">No. BPJS Kesehatan</label>
                <input type="text" class="form-control" id="bpjs_kesehatan" name="bpjs_kesehatan" placeholder="No. BPJS Kesehatan" value="<?= $user['bpjs_kesehatan'] ?>">

            </div>


            <div class="form-group">
                <label for="formGroupExampleInput">Nama Ibu Kandung</label>
                <input type="text" class="form-control" id="ibukagndung" name="ibukandung" placeholder="Nama Ibu Kandung" value="<?= $user['ibukandung'] ?>">
            </div>


            <div class="form-group">
                <label for="formGroupExampleInput">No dplk</label>
                <input type="text" class="form-control" id="dplk" name="dplk" placeholder="dplk" value="<?= $user['dplk'] ?>">
            </div>



            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </form>
    </div>
</div>