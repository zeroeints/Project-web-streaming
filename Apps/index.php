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
<header>
	//bagusan ini wkwkwk
	<h1>NetcHub</h1>
	<form action="" method="post" class="search">
		<input type="text" name="search" placeholder="search film">
		<button type="submit" name="submit"><i class="bi bi-search"></i></button>
	</form>
</header>
<div class="fitur">
	<div class="tombol"></div>
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