<?php 
include("../koneksi.php");
session_start();

$id_dosen = $_SESSION['dosen'];
$id_mhs = $_POST['id'];
$nilai = $_POST['nilai'];

$select = mysqli_query($conn, "SELECT id_nilai FROM nilai WHERE id_mahasiswa='$id_mhs' AND id_dosen='$id_dosen'");
while($data = mysqli_fetch_array($select)){
    $id_nilai = $data['id_nilai'];
}

$input = mysqli_query($conn, "UPDATE nilai SET nilai='$nilai' WHERE id_mahasiswa='$id_mhs'");

header("location:../nilai_dosen.php?id=$id_mhs");