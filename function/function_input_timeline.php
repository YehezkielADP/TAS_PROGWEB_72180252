<?php 
include("../koneksi.php");
session_start();

$mulai = $_POST['mulai'];
$selesai = $_POST['selesai'];
$status = $_POST['status'];


$input = mysqli_query($conn, "INSERT INTO timeline(tanggal_mulai, tanggal_selesai, status) VALUES('$mulai', '$selesai', '$status')");
header("location:../timeline.php");