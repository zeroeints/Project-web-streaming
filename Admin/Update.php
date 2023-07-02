<?php
include '../Koneksi.php';
if (isset($_POST['submit'])) {

$id = $_POST['id'];
$name =$_POST['name'];
$poster = $_FILES['poster']['name'];
$poster_tmp = $_FILES['poster']['tmp_name'];
$video = $_FILES['video']['name'];
$video_tmp = $_FILES['video']['tmp_name'];
$detail = $_POST['detail'];
$genre = $_POST['genre'];


if (!empty($poster)) {
    $max_file_size = 41 * 1024 * 1024;

    if ($_FILES['poster']['size'] > $max_file_size) {
        echo "Ukuran poster melebihi batas yang diizinkan (maksimum 41MB).";
        exit;
    }

    if (move_uploaded_file($poster_tmp, "../Apps/poster/" . $poster)) {
        $result = mysqli_query($koneksi, "SELECT poster FROM listfilm WHERE id='$id'");
        $data = mysqli_fetch_assoc($result);
        $old_poster = $data['poster'];
        if (!empty($old_poster)) {
            $old_poster_path = "../Apps/poster/" . $old_poster;
            if (file_exists($old_poster_path)) {
                unlink($old_poster_path);
            }
        }
        mysqli_query($koneksi, "UPDATE listfilm SET name='$name', poster='$poster', detail='$detail', genre='$genre' WHERE id='$id'");
    } else {
        echo "Gagal mengunggah poster baru.";
        exit;
    }
} else {
    mysqli_query($koneksi, "UPDATE listfilm SET  name='$name', detail='$detail', genre='$genre' WHERE id='$id'");
}


if (!empty($video)) {

    $max_file_size = 41 * 1024 * 1024;

    if ($_FILES['video']['size'] > $max_file_size) {
        echo "Ukuran video melebihi batas yang diizinkan (maksimum 41MB).";
        exit;
    }


    if (move_uploaded_file($video_tmp, "../Apps/video/" . $video)) {

        $result = mysqli_query($koneksi, "SELECT video FROM listfilm WHERE id='$id'");
        $data = mysqli_fetch_assoc($result);
        $old_video = $data['video'];
        if (!empty($old_video)) {
            $old_video_path = "../Apps/video/" . $old_video;
            if (file_exists($old_video_path)) {
                unlink($old_video_path);
            }
        }

        mysqli_query($koneksi, "UPDATE listfilm SET video='$video' WHERE id='$id'");
    } else {
        echo "Gagal mengunggah video baru.";
        exit;
    }
}

header("location: index.php");
}
