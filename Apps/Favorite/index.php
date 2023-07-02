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
    include '../../koneksi.php';
    $user = $_POST['favorite'];
    $fav = mysqli_query($koneksi,"SELECT favorite.*,listfilm.* FROM favorite JOIN listfilm ON favorite.idFilm = listfilm.id WHERE idUser='$user' ORDER BY ids DESC");  
?>
<div class="container">
    <header>
        <h1>FAVORITE</h1>
        <a href="../index.php"><i class="bi bi-box-arrow-left"></i></a>
    </header>
    <div class="list">
    <?php while ($data = mysqli_fetch_assoc($fav)) {?>
        <div class="card">
            <div class="poster" style="background-image: url('../Poster/<?=$data['poster'] ?>');"></div>
            <div class="more">
                <div class="detail">
                    <h3>Judul : <?= $data['name'] ?></h3>
                    <h3>Genre : <?= $data['genre']?></h3>
                </div>
                <form action="../PemutarVideo/index.php" method="post">
                    <!-- tambahin value id user -->
                    <input type="hidden" name="id" value="<?=$user ?>">
                    <!-- tambahin value id film supaya ga erorr -->
                    <button name="submit" value="<?=$data['idFilm'] ?>"><i class="bi bi-play-circle-fill"></i></button>
                </form>
            </div>
        </div>
    <?php } ?>
    </div>
</div>
</body>
</html>