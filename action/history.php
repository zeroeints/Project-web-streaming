<?php 
function history($idUser,$idFilm,$koneksi)
{
	$dataHistory = mysqli_query($koneksi,"SELECT * FROM history WHERE idUser = '$idUser'");
	$empty = true;
	while ($result = mysqli_fetch_assoc($dataHistory)) {
		if ($result['idFilm'] == $idFilm) {
			$empty = false;
			mysqli_query($koneksi,"DELETE FROM history WHERE idFilm = $idFilm");
			mysqli_query($koneksi,"INSERT INTO history VALUES('$idUser','$idFilm')");
		}
	}
	if ($empty == true) {
		mysqli_query($koneksi,"INSERT INTO history VALUES('$idUser','$idFilm')");
	}
}
 ?>