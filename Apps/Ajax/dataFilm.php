<?php 
include '../../koneksi.php';
session_start();
$search = $_GET['search'];

$username = $_SESSION['nama'];
$dataUser = mysqli_query($koneksi,"SELECT * FROM user WHERE nama = '$username'");
$datasUser = mysqli_fetch_assoc($dataUser);

$dataFilm = mysqli_query($koneksi,"SELECT * FROM listfilm WHERE name LIKE '%$search%' or genre='$search'");
?>
<?php while ($datasFilm = mysqli_fetch_assoc($dataFilm)) {?>
	<div class="card">
		<div class="img" style="background-image: url('Poster/<?=$datasFilm['poster'];?>');"><p><?=$datasFilm['name']; ?></p></div>
		<form action="PemutarVideo/index.php" method="post">
			<input type="hidden" name="id" value="<?= $datasUser['id'] ?>">
			<button name="submit"value="<?=$datasFilm['id'] ?>">Detail</button>
		</form>
	</div>
<?php } ?>