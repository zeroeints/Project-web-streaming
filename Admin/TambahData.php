<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $judul = $_POST['judul'];
    $poster = $_FILES['poster']['name'];
    //untuk menyimpan data sementara
    $poster_tmp = $_FILES['poster']['tmp_name'];
    $detail = $_POST['detail'];
    $genre = $_POST['genre'];
    $video = $_FILES['video']['name'];
    $video_tmp = $_FILES['video']['tmp_name'];
    $play = 0;

    //batas file 50 mb
    $max_file_size = 41 * 1024 * 1024;

    //pengecekan batas file poster > 50 mb
    if ($_FILES['poster']['size'] > $max_file_size) {
        echo "Ukuran poster melebihi batas yang diizinkan (maksimum 41MB).";
        exit;
    }

    // pengecekan video > 50 mb
    if ($_FILES['video']['size'] > $max_file_size) {
        echo "Ukuran video melebihi batas yang diizinkan (maksimum 41MB).";
        exit;
    }
    //move_uploaded_file() digunakan untuk memindahkan file yang diunggah dari lokasi sementara ke lokasi tujuan yang ditentukan.

    // Upload poster 
    if (move_uploaded_file($poster_tmp, "../Apps/poster/" . $poster)) {
        // Upload video
        if (move_uploaded_file($video_tmp, "../Apps/video/" . $video)) {
            $query = "INSERT INTO listfilm (judul,poster, video, detail, genre, play) VALUES ('$judul','$poster', '$video', '$detail', '$genre', '$play')";

            if (mysqli_query($koneksi, $query)) {
                echo "Data berhasil ditambahkan";
                Header("location: index.php");
            } else {
                echo "Error: " . mysqli_error($koneksi);
            }
        } else {
            echo "Gagal mengunggah video.";
        }
    } else {
        echo "Gagal mengunggah poster.";
    }
}
