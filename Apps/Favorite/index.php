<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    $sql = mysqli_query($koneksi,"SELECT * FROM listfilm"); // listfilm bisa diubah ke db fav
    $banyakData = 0;
    while (mysqli_fetch_assoc($sql)) {
        $banyakData++;
    }
    $batas = 8;
    if (isset($_POST['show'])) {
        $batas = $banyakData;
    }
    $dataFilm = mysqli_query($koneksi,"SELECT * FROM listfilm LIMIT $batas");
?>

<header>
    <div class="logo">
        <div class="bulat"><i class="bi bi-film"></i></div>
        <h5>Netclip</h5>
    </div>
    <a href="/action/logOut.php">LogOut</a>
</header>

<div class="fitur">
    <div class="profil">
        <i class="bi bi-person-circle"></i>
        <h2>profil</h2>
    </div>
    <div class="identitas">
        <div class="nama">
            <p>Nama:</p>
            <p><?=$username;?></p>
        </div>
        <div class="email">
            <p>Email:</p>
            <p><?php echo $datasUser['email']; ?></p>
        </div>
    </div>
    <form action="#" method="post" class="favorite">
        <button type="submit" name="favorite"><i class="bi bi-heart-fill"></i></button>
        <label>FAVORITE</label>
    </form>
    <form action="#" method="post" class="populer">
        <button type="submit" name="populer"><i class="bi bi-bar-chart-fill"></i></button>
        <label>TERPOPULER</label>
    </form>
    <form action="#" method="post" class="history">
        <button type="submit" name="history"><i class="bi bi-hourglass-split"></i></button>
        <label>HISTORY</label>
    </form>
    <div class="tombol"></div>
</div>


<div class="container">
    <div class="header">
        <h1>List Favorite</h1>
        <form action="" method="post" class="search">
            <input type="text" name="search" placeholder="search film" autocomplete="off">
            <button type="submit" name="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <div class="list">
        <?php while ($datasFilm = mysqli_fetch_assoc($dataFilm)) {?>
            <div class="card">
                <div class="img" style="background-image: url('Poster/<?=$datasFilm['poster'];?>.jpg');"><p><?=$datasFilm['poster']; ?></p></div>
                <form action=../../Apps/PemutarVideo/index.php method="post">
                    <input type="hidden" name="id" value="<?= $datasUser['id'] ?>">
                    <button name="submit" value="<?=$datasFilm['id'] ?>">Detail</button>
                </form>
            </div>
        <?php } ?>
    </div>
</div>

<?php if (!isset($_POST['show'])) {?>
    <form class="show" action="index.php" method="post">
        <button name="show">Show All</button>
    </form>
<?php } ?>


<script type="text/javascript">
    let tombol = document.getElementsByClassName('tombol')[0];
    let fitur = document.getElementsByClassName('fitur')[0];

    tombol.addEventListener("click",function () {
        fitur.classList.toggle('muncul');
    })
</script>

</body>
</html>