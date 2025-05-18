<?php
include("koneksi.php");
session_start();
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$iduser = $_SESSION['iduser'];
$sql = "insert into tbmahasiswa values ('$nim','$nama','$jk','$email','$nohp','$iduser')";
$exe = $conn->query($sql);
if ($exe) {
    header("location:read.php");
}
?>