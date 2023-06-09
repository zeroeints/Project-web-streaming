<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $detail = $_POST['detail'];
    $genre = implode(',', $_POST['genre']);
    $video = $judul;
    $play = 0;

    $query = "INSERT INTO listfilm (poster, video ,detail, genre,play) VALUES ('$judul','$video', '$detail', '$genre','$play')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    Header("location: TampilanAdmin.php");
}
?>
