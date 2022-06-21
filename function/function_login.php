<?php 
session_start();
include("../koneksi.php");

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($conn, "SELECT * FROM login WHERE username='$username' AND password='$password'");

while($data = mysqli_fetch_array($login)){
    $koor = $data['id_koordinator'];
    $mhs = $data['id_mahasiswa'];
    $dosen = $data['id_dosen'];
}

if(isset($koor)){
    $_SESSION['koor'] = $koor;
    header("location:../home.php");
}elseif(isset($dosen)){
    $_SESSION['dosen'] = $dosen;
    header("location:../home_dosen.php");
}elseif(isset($mhs)){
    $_SESSION['mhs'] = $mhs;
    header("location:../home_mhs.php");
}else{
    header("location:../index.php");
}