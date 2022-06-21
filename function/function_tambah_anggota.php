<?php
include("../koneksi.php");

$id = $_POST['id'];
$kelompok = $_POST['kelompok'];
$dosen = $_POST['dosen'];
$mahasiswa = $_POST['mahasiswa'];

$insert = mysqli_query($conn, "INSERT INTO kelompok(nama_kelompok, id_dosen, id_mahasiswa) VALUES('$kelompok', '$dosen', '$mahasiswa')");
header("location:../form_tambah_anggota.php?id=$id&&klm=$kelompok");