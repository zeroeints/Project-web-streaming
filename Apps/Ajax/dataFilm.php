<?php 
include '../../koneksi.php';
$search = $_GET['search'];
$dataFilm = mysqli_query($koneksi,"SELECT * FROM listfilm WHERE poster LIKE '%$search%'");
?>
<?php while ($datasFilm = mysqli_fetch_assoc($dataFilm)) {?>
	<div class="card">
		<div class="img" style="background-image: url('Poster/<?=$datasFilm['poster'];?>.jpg');"><p><?=$datasFilm['poster']; ?></p></div>
		<form action="PemutarVideo/index.php" method="post">
			<input type="hidden" name="id" value="<?= $datasUser['id'] ?>">
			<button name="submit"value="<?=$datasFilm['id'] ?>">Detail</button>
		</form>
	</div>
<?php } ?>