<?php
session_start();
include "koneksi.php";

if (isset($_POST['nama_keluarga'])) {
    $id = $_POST['id'];
    $nik = $_SESSION['nik'];
    $nama = $_POST['nama_keluarga'];
    $tgl_lahir = $_POST['tgl_keluarga'];
    $umur = floor((time() - strtotime($tgl_lahir)) / 31536000) . "tahun";
    $jk = $_POST['jenis_keluarga'];
    $nomortlp = $_POST['nomortlp'];
    $bpjs = $_POST['bpjs_kesehatan'];
    $hubungan = $_POST['hubungan_keluarga'];
    $_SESSION['notif'] = "Keluarga Diedit";
    $_SESSION['Tnotif'] = "success";


    mysqli_query($con, "UPDATE keluarga SET id_keluarga = '$id', id_user = '$nik',
    nama_keluarga = '$nama', tgl_keluarga = '$tgl_lahir', umur_keluarga = '$umur',
    jenis_keluarga = '$jk', hubungan_keluarga = '$hubungan', nomortlp = '$nomortlp',
    bpjs_kesehatan = '$bpjs'
    WHERE id_keluarga = '$id'");
    header("location: index.php?page=user/keluarga");
} else if (isset($_POST['namabadanp'])) {
    $id = $_POST['id'];
    $nik = $_SESSION['nik'];
    $nama = $_POST['namabadanp'];
    $tingkat = $_POST['tingkat_pendidikan'];
    $jurusan = $_POST['jurusan'];
    $tahun = $_POST['tahun'];
    $hubungan = $_POST['hubungan_keluarga'];
    $_SESSION['notif'] = "Pendidikan Diedit";
    $_SESSION['Tnotif'] = "success";


    mysqli_query($con, "UPDATE penfor SET id_pendidikan = '$id', 
    namabadanp = '$nama', jurusan = '$jurusan', tahun_kelulusan = '$tahun', tingkat_pendidikan = '$tingkat'
    ,id_user = '$nik'
    WHERE id_pendidikan = '$id'");
    header("location: index.php?page=user/pendidikan");
} else if (isset($_POST['nama_lembaga'])) {
    $id = $_POST['id'];
    $nik = $_SESSION['nik'];
    $nama = $_POST['nama_lembaga'];
    $kursus = $_POST['kursus'];
    $tahun = $_POST['tahun'];
    $keterangan = $_POST['keterangan'];
    $_SESSION['notif'] = "Pendidikan Non Formal Diedit";
    $_SESSION['Tnotif'] = "success";


    mysqli_query($con, "UPDATE nonpenfor SET id_nonformal = '$id', 
    nama_lembaga = '$nama', kursus = '$kursus', tahun = '$tahun', keterangan = '$keterangan'
    ,id_user = '$nik'
    WHERE id_nonformal = '$id'");
    header("location: index.php?page=user/nonformal");
} else if (isset($_POST['nama_perusahaan'])) {
    $id = $_POST['id'];
    $nik = $_SESSION['nik'];
    $nama = $_POST['nama_perusahaan'];
    $jabatan = $_POST['jabatan'];
    $bagian = $_POST['bagian'];
    $resign = $_POST['resign'];
    $periode1 = $_POST['periode1'];
    $periode2 = $_POST['periode2'];
    $_SESSION['notif'] = "Riwayat Diedit";
    $_SESSION['Tnotif'] = "success";


    mysqli_query($con, "UPDATE riwayat SET id_riwayat = '$id', 
    nama_perusahaan = '$nama', jabatan = '$jabatan', bagian = '$bagian', resign = '$resign'
    ,periode1 = '$periode1',periode2 = '$periode2',id_user = '$nik'
    WHERE id_riwayat = '$id'");
    header("location: index.php?page=user/riwayat");
}
