<?php
include("../koneksi.php");
session_start();

if(isset($_SESSION['koor'])){
$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$status = $_POST['status'];

$insert = mysqli_query($conn, "UPDATE mahasiswa SET nim='$nim' , nama_mahasiswa='$nama', email_mahasiswa='$email', id_timeline='$status' WHERE id_mahasiswa='$id'");
header("location:../home.php");
}

if(isset($_SESSION['mhs'])){

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$insert = mysqli_query($conn, "UPDATE mahasiswa SET nama_mahasiswa='$nama', email_mahasiswa='$email'  WHERE id_mahasiswa='$id'");
header("location:../profil.php?id=$id");
}


?>