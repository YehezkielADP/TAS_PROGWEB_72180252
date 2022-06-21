<?php
include("../koneksi.php");

$id = $_POST['id'];
$pasw = md5($_POST['pasw']);

$insert = mysqli_query($conn, "UPDATE login SET password='$pasw' WHERE id_mahasiswa='$id'");
header("location:../profil.php?id=$id");