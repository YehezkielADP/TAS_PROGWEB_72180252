<?php
include("../koneksi.php");

$kelompok = $_POST['kelompok'];
$dosen = $_POST['dosen'];


$insert = mysqli_query($conn, "INSERT INTO kelompok(nama_kelompok, id_dosen) VALUES('$kelompok', '$dosen')");
header("location:../kelompok.php");


?>