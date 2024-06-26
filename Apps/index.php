<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Netclip | home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php 
session_start();
if (!isset($_SESSION['nama'])) {
	header('location:../Login/signIn.php');
}
	include '../koneksi.php';
    global $koneksi;
	$username = $_SESSION['nama'];
	$dataUser = mysqli_query($koneksi,"SELECT * FROM user WHERE nama = '$username'");
	$datasUser = mysqli_fetch_assoc($dataUser);
	$sql = mysqli_query($koneksi,"SELECT * FROM listfilm");
	$banyakData = 0;
	while (mysqli_fetch_assoc($sql)) {
		$banyakData++;
	}
	$batas = 8;
	if (isset($_POST['show'])) {
		$batas = $banyakData;
	}
	$dataFilm = mysqli_query($koneksi,"SELECT * FROM listfilm ORDER BY id DESC LIMIT $batas");

	// untuk searching
	if (isset($_POST['cari'])) {
		$search = $_POST['search'];
		$dataFilm = mysqli_query($koneksi,"SELECT * FROM listfilm WHERE name LIKE '%$search%'");
	}
?>
<header>
	<div class="logo">
		<div class="bulat"><i class="bi bi-film"></i></div>
		<h5>Netclip</h5>
	</div>
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
			<p><?php echo $datasUser['email']; ?></p>
		</div>
	</div>
	<form action="Favorite/index.php" method="post" class="favorite">
		<button type="submit" name="favorite" value="<?= $datasUser['id'] ?>"><i class="bi bi-heart-fill"></i></button>
		<label>FAVORITE</label>
	</form>
	<form action="Terpopuler/index.php" method="post" class="populer">
		<button type="submit" name="populer" value="<?= $datasUser['id'] ?>"><i class="bi bi-bar-chart-fill"></i></button>
		<label>TERPOPULER</label>
	</form>
	<form action="History/index.php" method="post" class="history">
		<button type="submit" name="history" value="<?= $datasUser['id'] ?>"><i class="bi bi-hourglass-split"></i></button>
		<label>HISTORY</label>
	</form>
	<div class="tombol"></div>
</div>
<div class="event"></div>
<div class="container">
	<div class="header">
		<h1>List Film</h1>
		<form action="" method="post" class="search">
			<input id="search" type="text" name="search" placeholder="search film" autocomplete="off">
			<button id="cari" type="submit" name="cari"><i class="bi bi-search"></i></button>
		</form>
	</div>
	<div class="list" id="list">
		<?php while ($datasFilm = mysqli_fetch_assoc($dataFilm)) {?>
		<div class="card">
			<div class="img" style="background-image: url('Poster/<?=$datasFilm['poster'];?>');"><p><?=$datasFilm['name']; ?></p></div>
			<form action="PemutarVideo/index.php" method="post">
				<input type="hidden" name="id" value="<?= $datasUser['id'] ?>">
				<button name="submit"value="<?=$datasFilm['id'] ?>">Detail</button>
			</form>
		</div>
		<?php } ?>
	</div>
</div>
<?php if (!isset($_POST['show'])) {?>
<form class="show" action="index.php" method="post">
	<button name="show">Show All</button>
</form>
<?php } ?>

<!-- permium -->
<?php if (isset($_GET['premium'])) {?>
<div class="premium">
	<div class="cancel"></div>
	<h1>PREMIUM now</h1>
	<a href="../action/premium.php?user=<?= $datasUser['id'] ?>">
		<p>price :</p>
		<p><span style="text-decoration: line-through;">Rp 20.000.000</span> / Rp 0</p>
	</a>
</div>
<?php } ?>
<script type="text/javascript">
	var tombol = document.getElementsByClassName('tombol')[0];
	var fitur = document.getElementsByClassName('fitur')[0];

	tombol.addEventListener("click",function () {
		fitur.classList.toggle('muncul');
	})

	// ajax search
	var search = document.getElementById('search');
	var cari = document.getElementById('cari');
	var list = document.getElementById('list');

	search.addEventListener('keyup',function () {
		var xhr = new XMLHttpRequest();

		xhr.onreadystatechange = function () {
			if (xhr.readyState == 4 && xhr.status == 200) {
				list.innerHTML = xhr.responseText;
			}
		}

		xhr.open('get','ajax/dataFilm.php?search='+ search.value,true);
		xhr.send();
	})

	//premium
	var cancel = document.getElementsByClassName('cancel')[0];
	var premium = document.getElementsByClassName('premium')[0];
	cancel.addEventListener('click',function () {
		premium.style.display = 'none';
	})
</script>
</body>
</html>