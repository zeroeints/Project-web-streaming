<?php 
session_start();
if (!isset($_SESSION['nama'])) {
    header('location:../Login/signIn.php');
}
include '../koneksi.php';
$idUser = $_POST['idUser'];
$idFilm = $_POST['favorite'];


$data = mysqli_query($koneksi,"SELECT * FROM favorite WHERE idUser ='$idUser'");


$empty= true;
$pesan = "";
while ($datas = mysqli_fetch_assoc($data)) {
    if ($datas['idFilm'] == $idFilm) {
        $empty = false;
        mysqli_query($koneksi,"DELETE FROM favorite WHERE idFilm = $idFilm");
        $pesan = "BERHASIL MENGHAPUS FILM DARI FAVORITE";
    }
}
if ($empty == true) {
    mysqli_query($koneksi,"INSERT INTO favorite VALUES('','$idUser','$idFilm')");
    $pesan = "BERHASIL TAMBAH FILM KE FAVORITE";
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notif</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style type="text/css">
        :root{
            --color-black:#151313;
            --color-red:#FF0000;
            --color-gray:#605E5E;
            --color-white:#FFFFFF;
        }
        *{
            padding: 0;
            margin: 0;
            font-family: 'Mulish', sans-serif;
        }
        body{
            background-color: var(--color-black);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            background-color: black;
            border: 5px solid red;
            border-radius: 10px;
            width: 500px;
            position: relative;
            height: 200px;
            color: white;
            display: flex;
            justify-content: center;
            align-items: end;
        }
        header{
            display: flex;
            justify-content: center;
            align-items: center;
            text-shadow: 0 0 5px red;
            color: white;
            height: 140px;
            width: 140px;
            background-color: var(--color-red);
            position: absolute;
            top: -90px;
            border-radius: 50%;
            left: 50%;
            transform: translateX(-50%);
            padding: 0 0 0 5px;
            box-sizing: border-box;
        }
        header .logo{
            width: 150px;
            height: 50px;
            display: flex;
            align-items: center;
        }
        header .logo .bulat{
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--color-red);
            display: grid;
            place-items: center;
        }
        header .logo .bulat i{
            font-size: 30px;
        }
        header .logo h5{
            font-size: 25px;
            margin-left: 5px;
        }
        .box{
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
        }
        button{
            background-color: lawngreen;
            border: none;
            padding: 10px 50px;
            cursor: pointer;
            border-radius: 5px;
            text-shadow: 0 0 5px black;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <div class="bulat"><i class="bi bi-film"></i></div>
                <h5>Netclip</h5>
            </div>
        </header>
        <div class="box">
            <h3><?= $pesan ?></h3>
            <form action="../Apps/PemutarVideo/index.php" method="post">
                <input type="hidden" name="id" value="<?= $idUser ?>">
                <button name="submit"value="<?=$idFilm?>">ok</button>
            </form>
        </div>
    </div>
</body>
</html>