<?php
include '../koneksi.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $poster = $_FILES['poster']['name'];
    $poster_tmp = $_FILES['poster']['tmp_name'];
    $detail = $_POST['detail'];
    $genre = $_POST['genre'];
    $video = $_FILES['video']['name'];
    $video_tmp = $_FILES['video']['tmp_name'];
    $liked = 0;

    // batas file 50 MB
    $max_file_size = 41 * 1024 * 1024;

    // pengecekan batas file poster > 50 MB
    if ($_FILES['poster']['size'] < $max_file_size) {
        if ($_FILES['video']['size'] < $max_file_size) {
            $cekName = "SELECT * FROM listfilm WHERE name = '$name'";
            $resultname = mysqli_query($koneksi, $cekName);

            if (mysqli_num_rows($resultname) > 0) {
                alert();
            } else {
                if (move_uploaded_file($poster_tmp, "../Apps/poster/" . $poster)) {
                    if (move_uploaded_file($video_tmp, "../Apps/video/" . $video)) {
                        $query = "INSERT INTO listfilm (name, poster, video, detail, genre, liked) VALUES ('$name', '$poster', '$video', '$detail', '$genre', '$liked')";

                        if (mysqli_query($koneksi, $query)) {
                            echo "Data berhasil ditambahkan";
                            header("location: index.php");
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
        } else {
            alert2();
        }
    } else {
        alert2();
    }
}

function alert()
{
?>
    <script>
        alert("Film dengan nama yang sama sudah ada di database");
    </script>
<?php
}

function alert2()
{
?>
    <script>
        alert("Ukuran poster/video melebihi batas yang diizinkan (maksimum 41MB)");
    </script>
<?php
}
?>
