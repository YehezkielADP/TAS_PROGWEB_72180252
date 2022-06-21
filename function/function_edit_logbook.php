<?php
include("../koneksi.php");

$id = $_POST['id'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$pekerjaan = $_POST['pekerjaan'];



$insert = mysqli_query($conn, "UPDATE logbook SET tanggal_mulai='$mulai', tanggal_selesai='$selesai', pekerjaan='$pekerjaan' WHERE id_logbook='$id'");
header("location:../logbook.php");


?>