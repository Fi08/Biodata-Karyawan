<?php
session_start();
include('koneksi.php');
if (isset($_POST['submit'])) {
    $username = $_POST['nik'];
    $pass = $_POST['pass'];
    $qry = mysqli_query($con, "SELECT * FROM user WHERE email ='$username'");
    $row = mysqli_fetch_array($qry);
    $passVerify = $row['password'];
    $role = $row['role_id'];
    if (password_verify($pass, $passVerify)) {
        if ($role === '1') {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nik'] = $row['email'];
            $_SESSION['role'] = $row['role_id'];
            $_SESSION['name'] = $row['name'];
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        } else if ($role === '2') {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nik'] = $row['email'];
            $_SESSION['role'] = $row['role_id'];
            $_SESSION['name'] = $row['name'];
            echo "<meta http-equiv='refresh' content='0; url=index.php'>";
        }
    } else {
        $_SESSION['login'] = "Password Salah";
        $_SESSION['Tlogin'] = "danger";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
}
