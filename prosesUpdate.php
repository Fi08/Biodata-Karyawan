<?php
session_start();
include "koneksi.php";

//bikin kondisi buat update masing2 halaman? isset pada variable
if (isset($_POST['bagian'])) {
    $nik = $_SESSION['nik'];
    $bagian = $_POST['bagian'];
    $dept = $_POST['dept'];
    $section = $_POST['section'];

    mysqli_query($con, "UPDATE user SET bagian = '$bagian', dept = '$dept', section = '$section' WHERE email='$nik'");
    header("location: index.php");
} else if (isset($_POST['name'])) {
    $nik = $_SESSION['nik'];
    $name = $_POST['name'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $umur = $_POST['umur'];
    $jk = $_POST['jk'];
    $hp = $_POST['hp'];
    $telepon = $_POST['telepon'];
    $jalan = $_POST['jalan'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $kota = $_POST['kota'];
    $provinsi = $_POST['provinsi'];
    $jalan_skrg = $_POST['jalan_skrg'];
    $kelurahan_skrg = $_POST['kelurahan_skrg'];
    $kecamatan_skrg = $_POST['kecamatan_skrg'];
    $kota_skrg = $_POST['kota_skrg'];
    $provinsi_skrg = $_POST['provinsi_skrg'];
    $nomorktp = $_POST['nomorktp'];
    $nomerkk = $_POST['nomerkk'];
    $nomorsim = $_POST['nomorsim'];
    $status = $_POST['status'];
    $agama = $_POST['agama'];
    $bank = $_POST['bank'];
    $npwp = $_POST['npwp'];
    $norekening = $_POST['norekening'];
    $jamsostek = $_POST['jamsostek'];
    $bpjs_kesehatan = $_POST['bpjs_kesehatan'];
    $ibukandung = $_POST['ibukandung'];
    $dplk = $_POST['dplk'];

    $_SESSION['notif'] = "Data Telah Diubah";
    $_SESSION['Tnotif'] = "success";

    mysqli_query($con, "UPDATE user SET name = '$name', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', 
    umur = '$umur', jk = '$jk', hp = '$hp', telepon = '$telepon', jalan = '$jalan', kelurahan = '$kelurahan', kecamatan = '$kecamatan',
    kota = '$kota', provinsi = '$provinsi', jalan_skrg = '$jalan_skrg', kelurahan_skrg = '$kelurahan_skrg', kecamatan_skrg = '$kecamatan_skrg',
    kota_skrg = '$kota_skrg', provinsi_skrg = '$provinsi_skrg', nomorktp = '$nomorktp', nomerkk = '$nomerkk', nomorsim = '$nomorsim',
    status = '$status', agama = '$agama', bank = '$bank', npwp = '$npwp', norekening = '$norekening',
    jamsostek = '$jamsostek', bpjs_kesehatan = '$bpjs_kesehatan',ibukandung = '$ibukandung', dplk = '$dplk'
    WHERE email='$nik'");
    header("location: index.php?page=user/personal");
} else if (isset($_FILES['image'])) {

    // siapkan data
    $nik = $_SESSION['nik'];

    $namaFoto = $_FILES['image']['name'];
    $sizeFoto = $_FILES['image']['size'];
    $tmpFoto = $_FILES['image']['tmp_name'];
    $fotoError = $_FILES['image']['error'];

    $gambarValid = ['jpg', 'png', 'jpeg'];
    $ekstensiGambar = strtolower(end(explode('.', $namaFoto)));
    //apakah foto diupload
    // if semua kondisi terpenuhi 
    if ($fotoError !== 4) {
        if (in_array($ekstensiGambar, $gambarValid) === true) {
            if ($sizeFoto < 2000000) {

                mysqli_query($con, "UPDATE user SET foto = '$namaFoto' WHERE email='$nik'");
                move_uploaded_file($tmpFoto, 'aset/' . $namaFoto);
                $_SESSION['notif'] = "Berhasil Upload";
                $_SESSION['Tnotif'] = "success";
                header("location: index.php");
            } else {
                $_SESSION['notif'] = "Minimal Gambar 2mb";
                $_SESSION['Tnotif'] = "danger";
                header("location: index.php");
            }
        } else {
            $_SESSION['notif'] = "Yang Anda Masukan Bukan Gambar";
            $_SESSION['Tnotif'] = "danger";
            header("location: index.php");
        }
    } else {
        $_SESSION['notif'] = "Masukan Gambar";
        $_SESSION['Tnotif'] = "danger";
        header("location: index.php");
    }
} else if (isset($_POST['current_password'])) {
    $passLama = $_POST['current_password'];
    $passBaru = $_POST['new_password1'];
    $passKonfirmasi = $_POST['new_password2'];
    $nik = $_SESSION['nik'];
    $sql = mysqli_query($con, "SELECT * FROM user WHERE email = '$nik'");
    $user = mysqli_fetch_array($sql);
    $passDB = $user['password']; // di decrypt
    // minimal password

    //123456
    if (password_verify($passLama, $passDB)) {
        if ($passBaru === $passKonfirmasi) {
            $passEnk = password_hash($passBaru, PASSWORD_DEFAULT);
            mysqli_query($con, "UPDATE user SET password = '$passEnk' WHERE email='$nik'");
            $_SESSION['notif'] = "Password Telah Diganti";
            $_SESSION['Tnotif'] = "success";
            header("location: index.php");
        } else {
            $_SESSION['notif'] = "Password Tidak Sama";
            $_SESSION['Tnotif'] = "danger";
            header("location: index.php");
        }
    } else {
        $_SESSION['notif'] = "Masukan Password dengan benar";
        $_SESSION['Tnotif'] = "danger";
        header("location: index.php");
    }
}
