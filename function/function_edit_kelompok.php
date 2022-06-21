<?php
include("../koneksi.php");

$id = $_POST['id'];
$kelompok = $_POST['kelompok'];
$dosen = $_POST['dosen'];



$insert = mysqli_query($conn, "UPDATE kelompok SET nama_kelompok='$kelompok', id_dosen='$dosen' WHERE id_kelompok='$id'");
header("location:../kelompok.php");


?>