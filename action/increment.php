<?php 
include '../koneksi.php';
if (isset($_POST['submit'])) {
	$id = $_POST['submit'];
	$data = mysqli_query($koneksi,"SELECT * FROM listfilm WHERE id = '$id'");
	$datas = mysqli_fetch_assoc($data);
	$dataPlay = $datas['play'];
	$dataPlay++;
	mysqli_query($koneksi,"UPDATE listfilm SET play='$dataPlay' WHERE id = '$id'");
	header("location:../Apps/index.php");
}

 ?>