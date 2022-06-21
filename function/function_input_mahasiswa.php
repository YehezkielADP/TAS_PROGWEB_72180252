<?php
include("../koneksi.php");
session_start();


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$status = $_POST['status'];
$password = md5($_POST['password']);

$insert = mysqli_query($conn, "INSERT INTO mahasiswa(nim, nama_mahasiswa, email_mahasiswa, id_timeline) VALUES('$nim', '$nama', '$email', '$status')");
$select = mysqli_query($conn, "SELECT id_mahasiswa FROM mahasiswa WHERE nim='$nim'");
while($data = mysqli_fetch_array($select)){
    $id_mhs = $data['id_mahasiswa'];
}

$insertmhs =mysqli_query($conn, "INSERT INTO login(username, password, id_mahasiswa) VALUES('$email', '$password', '$id_mhs')");
header("location:../home.php?$id_mhs&&$email&&$password");


?>