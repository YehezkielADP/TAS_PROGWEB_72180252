<?php
include("../koneksi.php");

$id = $_POST['id'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$pekerjaan = $_POST['pekerjaan'];



$insert = mysqli_query($conn, "INSERT INTO logbook(tanggal_mulai, tanggal_selesai, pekerjaan, id_mahasiswa) VALUES('$mulai', '$selesai', '$pekerjaan', '$id')");
header("location:../logbook.php");


?>