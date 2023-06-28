<?php 
session_start();
if (!isset($_SESSION['nama'])) {
	header('location:../Login/signIn.php');
}
include '../koneksi.php';
if (isset($_GET['user'])) {
	$user = $_GET['user'];
	mysqli_query($koneksi,"UPDATE user SET subscribe=true WHERE id = '$user'");
	header("location:../Apps/index.php");
}else{
	header("location:../Apps/index.php");
}

 ?>