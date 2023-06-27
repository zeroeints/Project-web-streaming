<!DOCTYPE html>
<html>
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
        <div class="card">
            <div class="poster" style="background-image: url('../Poster/Thor 2.jpg');"></div>
            <div class="more">
                <div class="detail">
                    <h3>Judul : thor</h3>
                    <h3>Genre : action</h3>
                </div>
                <form action="../PemutarVideo/index.php" >
                    <!-- tambahin value id user -->
                    <input type="hidden" name="id" value="">
                    <!-- tambahin value id film supaya ga erorr -->
                    <button name="submit"value=""><i class="bi bi-play-circle-fill"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>