<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAVORITE | page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
    session_start();
    include '../../koneksi.php';
    global $koneksi;
    $username = $_SESSION['nama'];
    $dataUser = mysqli_query($koneksi,"SELECT * FROM user WHERE nama = '$username'");
    $datasUser = mysqli_fetch_assoc($dataUser);
    $getId = $_SESSION['id'];

    $favData = mysqli_query($koneksi, "SELECT * FROM favorite");

    $sql = mysqli_query($koneksi,"SELECT * FROM listfilm ");
?>
    <!-- note -->
    <!-- ambil data dari data base favorite -->
    <!-- ulang card sebanyak data yang ada -->
    <!-- di dalam card kasi data datanya -->
    <!-- yang dibawah ini baru contohnya saja -->
<div class="container">
    <header>
        <h1>FAVORITE</h1>
        <a href="../index.php"><i class="bi bi-box-arrow-left"></i></a>
    </header>
    <div class="list">
        <?php while($datafilm = mysqli_fetch_assoc($sql)) ?>
        <div class="card">
            <div class="poster" style="background-image: url('Poster/<?=$datafilm['poster']; ?>');"></div>
            <div class="more">
                <div class="detail">
                    <h3>Judul : <?= $datafilm['name'] ?></h3>
                    <h3>Genre : <?= $datafilm['genre'] ?></h3>
                </div>
                <form action="../PemutarVideo/index.php" >
                    <!-- tambahin value id user -->
                    <input type="hidden" name="id" value="<?= $datasUser['id'] ?>">
                    <!-- tambahin value id film supaya ga erorr -->
                    <button name="submit" value="<?= $datafilm['idFilm'] ?>"><i class="bi bi-play-circle-fill"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>