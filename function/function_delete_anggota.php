<?php
include("../koneksi.php");

$id = $_GET['id'];
$klm = $_GET['klm'];


$delete = mysqli_query($conn, "DELETE FROM kelompok WHERE id_mahasiswa='$id' AND nama_kelompok='$klm'");
header("location:../kelompok.php");
?>