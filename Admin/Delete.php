<?php
include_once("../Koneksi.php");

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM listfilm WHERE id=$id");
header("Location:TampilanAdmin.php");

?>