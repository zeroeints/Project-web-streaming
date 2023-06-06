<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Streaming | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php 
include '../../koneksi.php';
$id = $_POST['submit'];
$data = mysqli_query($koneksi,"SELECT * FROM listfilm WHERE id = '$id'");
$datas = mysqli_fetch_assoc($data);
 ?>
 <div class="container">
	<div class="back">
		<a href="../index.php"><i class="bi bi-arrow-left-circle"></i></a>
		<a href="../index.php" class="txt">Back</a>
	</div>
	<video controls>
		<source src="../Video/<?= $datas['genre'] ?>/<?= $datas['video']; ?>.mp4" type="video/mp4">
	</video>
	<div class="button">
		<p>bagas</p>
	</div>
</div>
</body>
</html>