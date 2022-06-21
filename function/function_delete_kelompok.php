<?php
include("../koneksi.php");
$id = $_GET['id'];


$deleteklmpk = mysqli_query($conn, "DELETE from kelompok WHERE id_kelompok='$id'");
header("location:../kelompok.php");
?>