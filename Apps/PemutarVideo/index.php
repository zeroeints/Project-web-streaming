<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Streaming | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
include '../../koneksi.php';
$idFilm = $_POST['submit'];
$idUser = $_POST['id'];
$data = mysqli_query($koneksi,"SELECT * FROM listfilm WHERE id = '$idFilm'");
$datas = mysqli_fetch_assoc($data);
 ?>
 <div class="container">
	<div class="back">
		<a href="../index.php"><i class="bi bi-arrow-left-circle"></i></a>
		<a href="../index.php" class="txt">Back</a>
	</div>
	<div class="pemutar">
		<video controls>
			<source src="../Video/<?= $datas['video']; ?>.mp4" type="video/mp4">
		</video>
		<div class="tranding">
			<h5>tranding</h5>
		</div>
	</div>
	<div class="button">
		<form action="../../action/like.php" method="post">
			<input type="hidden" name="idUser" value="<?= $idUser ?>">
			<button class="like" name="like" value="<?=$idFilm ?>"><i class="bi bi-heart"></i></button>
		</form>
		<form  action="../../action/favorite.php" method="post">
			<input type="hidden" name="idUser" value="<?= $idUser ?>">
			<button class="favorite" name="favorite" value="<?=$idFilm ?>"><i class="bi bi-bookmark-plus"></i></i></button>
		</form>
	</div>
</div>
</body>
</html>