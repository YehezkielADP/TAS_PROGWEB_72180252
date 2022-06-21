<?php 
include("../koneksi.php");
session_start();

$id = $_POST['id'];
$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$status = $_POST['status'];


$input = mysqli_query($conn, "UPDATE timeline SET tanggal_mulai = '$mulai', tanggal_selesai = '$selesai', status='$status'");
header("location:../timeline.php");