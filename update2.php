<?php
include("koneksi.php");
$nidn = $_POST['nidn'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jabatan = $_POST['jabatan'];
$nohp = $_POST['nohp'];
$sql = "update dosen set nama='$nama',jk='$jk',jabatan='$jabatan',nohp='$nohp' where nidn='$nidn'";
$exe = $conn->query($sql);
if ($exe) {
    header("location:read2.php");
}

?>