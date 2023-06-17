<?php 
include '../koneksi.php';
$idUser = $_POST['idUser'];
$idFilm = $_POST['like'];


$data = mysqli_query($koneksi,"SELECT * FROM terpopuler WHERE idUser ='$idUser'");


$empty= true;
while ($datas = mysqli_fetch_assoc($data)) {
    if ($datas['idFilm'] === $idFilm) {
        $empty = false;
        echo "data ada";
    }
}
if ($empty == true) {
    echo "data kosong";
}
 ?>