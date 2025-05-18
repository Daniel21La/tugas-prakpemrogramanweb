<?php
include("koneksi.php");
session_start();
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$nohp = $_POST['nohp'];
$iduser = $_SESSION['iduser'];
$sql = "insert into dosen values ('$nidn','$nama','$jk','$jabatan','$nohp','$iduser')";
$exe = $conn->query($sql);
if ($exe) {
    header("location:read2.php");
}
?>