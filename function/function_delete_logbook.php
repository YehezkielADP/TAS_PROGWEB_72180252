<?php
include("../koneksi.php");

$id = $_GET['id'];


$delete = mysqli_query($conn, "DELETE FROM logbook WHERE id_logbook='$id'");

header("location:../logbook.php");
?>