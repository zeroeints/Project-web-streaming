<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Netclip | home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php 
session_start();
	include '../koneksi.php';
	$username = $_SESSION['nama'];
	$data = mysqli_query($koneksi,"SELECT * FROM user WHERE nama = '$username'");
	$datas = mysqli_fetch_assoc($data);
	$film = 'poster/Sewu_Dino.jpg';
?>
<header>
	<h1>Netclip</h1>
	<a href="../action/logOut.php">LogOut</a>
</header>
<div class="fitur">
	<div class="profil">
		<i class="bi bi-person-circle"></i>
		<h2>profil</h2>
	</div>
	<div class="identitas">
		<div class="nama">
			<p>Nama:</p>
			<p><?=$username;?></p>
		</div>
		<div class="email">
			<p>Email:</p>
			<p><?php echo $datas['email']; ?></p>
		</div>
	</div>
	<form action="#" method="post" class="favorite">
		<button type="submit" name="favorite"><i class="bi bi-heart-fill"></i></button>
		<label>FAVORITE</label>
	</form>
	<form action="#" method="post" class="populer">
		<button type="submit" name="populer"><i class="bi bi-bar-chart-fill"></i></button>
		<label>TERPOPULER</label>
	</form>
	<form action="#" method="post" class="history">
		<button type="submit" name="history"><i class="bi bi-hourglass-split"></i></button>
		<label>HISTORY</label>
	</form>
	<div class="tombol"></div>
</div>
<div class="logo">
	<h1>NETCLIP</h1>
</div>
<div class="container">
	<div class="header">
		<h1>List Film</h1>
		<form action="" method="post" class="search">
			<input type="text" name="search" placeholder="search film">
			<button type="submit" name="submit"><i class="bi bi-search"></i></button>
		</form>
	</div>
	<div class="list">
		<div class="card">
			<div class="img" style="background-image: url(<?=$film ?>)"><p>sewu</p></div>
			<form action="#" method="post">
				<button value="1">Detail</button>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
	var tombol = document.getElementsByClassName('tombol')[0];
	var fitur = document.getElementsByClassName('fitur')[0];

	tombol.addEventListener("click",function () {
		fitur.classList.toggle('muncul');
	})
</script>
</body>
</html>