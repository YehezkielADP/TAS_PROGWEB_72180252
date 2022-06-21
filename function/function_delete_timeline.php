<?php
include("../koneksi.php");

$id = $_GET['id'];
$null = 'null';
$update =mysqli_query($conn, "UPDATE mahasiswa SET id_timeline=null WHERE id_timeline='$id'");
$delete = mysqli_query($conn, "DELETE FROM timeline WHERE id_timeline='$id'");
header("location:../timeline.php");
?>