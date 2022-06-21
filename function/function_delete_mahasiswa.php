<?php
include("../koneksi.php");

$id = $_GET['id'];


$deletelog = mysqli_query($conn, "DELETE from login WHERE id_mahasiswa='$id'");
$deletelogbook = mysqli_query($conn, "DELETE from logbook WHERE id_mahasiswa='$id'");
$deleteklmpk = mysqli_query($conn, "DELETE from kelompok WHERE id_mahasiswa='$id'");
$deletenilai = mysqli_query($conn, "DELETE from nilai WHERE id_mahasiswa='$id'");
$delete = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id_mahasiswa=$id");
header("location:../home.php");
?>