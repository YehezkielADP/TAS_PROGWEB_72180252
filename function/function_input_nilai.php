<?php 
include("../koneksi.php");
session_start();

$id_dosen = $_SESSION['dosen'];
$id_mhs = $_POST['id'];
$nilai = $_POST['nilai'];

$input = mysqli_query($conn, "INSERT INTO nilai(nilai, id_dosen, id_mahasiswa) VALUES('$nilai', '$id_dosen', '$id_mhs')");
header("location:../nilai_dosen.php?id=$id_mhs");