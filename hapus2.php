<?php
include("koneksi.php");
$x = $_GET['nidn'];
$sql = "delete from dosen where nidn='$x'";
$exe = $conn->query($sql);
if ($exe) {
    header("location:read2.php");
}
?>