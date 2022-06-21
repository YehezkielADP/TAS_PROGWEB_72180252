<?php
include("../koneksi.php");
session_start();



if(isset($_SESSION['dosen'])){

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$insert = mysqli_query($conn, "UPDATE dosen SET nama_dosen='$nama', email_dosen='$email'  WHERE id_dosen='$id'");
header("location:../profil.php?id=$id");
}


?>