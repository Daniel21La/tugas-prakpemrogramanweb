<?php
include("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "select * from users where username='$username' and password='$password'";
$exe = $conn->query($sql);
$banyak = $exe->num_rows;//hasilnya 1(true) atau 0(false)
if ($banyak > 0) {
    session_start();
    $data = $exe->fetch_assoc();
    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['iduser'] = $data['iduser'];
    header("location:sidebar.php");
} else {
    header("username atau password salah");
}
?>