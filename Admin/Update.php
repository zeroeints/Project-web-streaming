<?php
include '../Koneksi.php';

$id = $_POST['id'];
$poster = $_POST['poster'];
$detail = $_POST['detail'];
$genre = implode(',', $_POST['genre']);

mysqli_query($koneksi, "UPDATE listfilm SET poster='$poster', detail='$detail', genre='$genre' WHERE id='$id'");

header("location: TampilanAdmin.php");
?>
