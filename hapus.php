<?php

include "koneksi.php";


if (isset($_GET['id_k'])) {

    $id = $_GET['id_k'];
    $_SESSION['notif'] = "Keluarga Dihapus";
    $_SESSION['Tnotif'] = "danger";
    $sql = "DELETE FROM keluarga WHERE id_keluarga = '$id'";
    mysqli_query($con, $sql);

?>
    <meta http-equiv='refresh' content='0; url=index.php?page=user/keluarga'>
<?php
}
if (isset($_GET['id_p'])) {

    $id = $_GET['id_p'];
    $_SESSION['notif'] = "Pendidikan Dihapus";
    $_SESSION['Tnotif'] = "danger";
    $sql = "DELETE FROM penfor WHERE id_pendidikan = '$id'";
    mysqli_query($con, $sql);

?>
    <meta http-equiv='refresh' content='0; url=index.php?page=user/pendidikan'>
<?php
}
if (isset($_GET['id_np'])) {

    $id = $_GET['id_np'];
    $_SESSION['notif'] = "Pendidikan Non Formal Dihapus";
    $_SESSION['Tnotif'] = "danger";
    $sql = "DELETE FROM nonpenfor WHERE id_nonformal = '$id'";
    mysqli_query($con, $sql);

?>
    <meta http-equiv='refresh' content='0; url=index.php?page=user/nonformal'>
<?php
}
if (isset($_GET['id_r'])) {

    $id = $_GET['id_r'];
    $_SESSION['notif'] = "Riwayat Dihapus";
    $_SESSION['Tnotif'] = "danger";
    $sql = "DELETE FROM riwayat WHERE id_riwayat = '$id'";
    mysqli_query($con, $sql);

?>
    <meta http-equiv='refresh' content='0; url=index.php?page=user/riwayat'>
<?php
}
if (isset($_GET['id_as'])) {

    $id = $_GET['id_as'];
    $_SESSION['notif'] = "Data Dihapus";
    $_SESSION['Tnotif'] = "danger";
    $sql = "DELETE FROM user WHERE email = '$id'";
    mysqli_query($con, $sql);

?>
    <meta http-equiv='refresh' content='0; url=index.php?page=admin/search'>
<?php
}
