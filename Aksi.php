<?php
session_start();
include "koneksi.php";

// Tambah Keluarga
function acak($panjang = 15)
{
    $string = '1234567890abcdefghijklmnopqrstuvwxyz';
    $data = '';
    for ($i = 0; $i < $panjang; $i++) {
        $rand = rand(0, strlen($string) - 1);
        $data .= $string[$rand];
    }

    return $data;
}


if (isset($_POST['nama_keluarga'])) {
    $id = 'K' . acak();
    $nik = $_SESSION['nik'];
    $nama = $_POST['nama_keluarga'];
    $tgl_lahir = $_POST['tgl_keluarga'];
    $umur = floor((time() - strtotime($tgl_lahir)) / 31536000) . "tahun";
    $jk = $_POST['jenis_keluarga'];
    $nomortlp = $_POST['nomortlp'];
    $bpjs = $_POST['bpjs_kesehatan'];
    $hubungan = $_POST['hubungan_keluarga'];
    $_SESSION['notif'] = "Keluarga Ditambahkan";
    $_SESSION['Tnotif'] = "success";
    mysqli_query($con, "INSERT INTO keluarga VALUES ('$id','$nik','$nama','$tgl_lahir','$umur','$jk','$hubungan','$nomortlp','$bpjs')");
    header("location: index.php?page=user/keluarga");
} else if (isset($_POST['namabadanp'])) {
    $id = 'P' . acak();
    $nik = $_SESSION['nik'];
    $nama = $_POST['namabadanp'];
    $tingkat = $_POST['tingkat_pendidikan'];
    $jurusan = $_POST['jurusan'];
    $tahun = $_POST['tahun'];

    $_SESSION['notif'] = "Pendidikan Ditambahkan";
    $_SESSION['Tnotif'] = "success";
    mysqli_query($con, "INSERT INTO penfor VALUES ('$id','$tingkat','$nama','$jurusan','$tahun','$nik')");
    header("location: index.php?page=user/pendidikan");
} else if (isset($_POST['nama_lembaga'])) {
    $id = 'N' . acak();
    $nik = $_SESSION['nik'];
    $nama = $_POST['nama_lembaga'];
    $kursus = $_POST['kursus'];
    $tahun = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];

    $_SESSION['notif'] = "Pendidikan Non Formal Ditambahkan";
    $_SESSION['Tnotif'] = "success";
    mysqli_query($con, "INSERT INTO nonpenfor VALUES ('$id','$nama','$kursus','$tahun','$keterangan','$nik')");
    header("location: index.php?page=user/nonformal");
} else if (isset($_POST['nama_perusahaan'])) {
    $id = 'R' . acak();
    $nik = $_SESSION['nik'];
    $nama = $_POST['nama_perusahaan'];
    $jabatan = $_POST['jabatan'];
    $bagian = $_POST['bagian'];
    $resign = $_POST['resign'];
    $periode1 = $_POST['periode1'];
    $periode2 = $_POST['periode2'];

    $_SESSION['notif'] = "Riwayar Ditambahkan";
    $_SESSION['Tnotif'] = "success";
    mysqli_query($con, "INSERT INTO riwayat VALUES ('$id','$periode1','$periode2','$nama','$jabatan','$bagian','$resign','$nik')");
    header("location: index.php?page=user/riwayat");
} else if (isset($_POST['emailbaru'])) {


    $nik = $_POST['emailbaru'];
    if (mysqli_fetch_row(mysqli_query($con, "SELECT * FROM user WHERE email = '$nik'")) > 0) {
        $_SESSION['notif'] = "NIK Sudah Terpakai";
        $_SESSION['Tnotif'] = "danger";
        header("location: index.php?page=admin/newemployee");
    } else {
        echo 'data mauk';
        $nama = $_POST['nama'];
        $password = $_POST['password'];
        $passwordhash = password_hash($password, PASSWORD_DEFAULT);
        $_SESSION['notif'] = "Employee Ditambahkan";
        $_SESSION['Tnotif'] = "success";
        mysqli_query($con, "INSERT INTO user (email, name, password) VALUES ('$nik','$nama','$passwordhash')");
        header("location: index.php?page=admin/newemployee");
    }
}
