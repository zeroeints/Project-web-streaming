<?php
include '../Koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($koneksi, "SELECT * FROM listfilm WHERE id='$id'");
$data = mysqli_fetch_assoc($result);
$poster = $data['poster'];
$video = $data['video'];

// Hapus file poster
if (!empty($poster)) {
    $poster_path = "../Apps/poster/" . $poster;
    //cek apakah file ada
    if (file_exists($poster_path)) {
        unlink($poster_path);
    }
}

// Hapus file video
if (!empty($video)) {
    $video_path = "../Apps/video/" . $video;
    if (file_exists($video_path)) {
        unlink($video_path);
    }
}

// Hapus data dari database
mysqli_query($koneksi, "DELETE FROM listfilm WHERE id='$id'");

header("location: index.php");
