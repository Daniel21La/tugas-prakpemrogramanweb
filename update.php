<?php
include("koneksi.php");
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$sql = "update tbmahasiswa set nama='$nama',jk='$jk',email='$email',nohp='$nohp' where nim='$nim'";
$exe = $conn->query($sql);
if ($exe) {
    header("location:read.php");
}
?>