<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include '../koneksi.php';
    global $koneksi;
    if (isset($_POST['submit'])) {
        $getName = $_POST['nama'];
        $getPass = $_POST['password'];
        $getEmail = $_POST['email'];

        mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$getName', '$getPass', '$getEmail', false)");
        header('location:../Login/signIn.php');
    }

?>


<div class="container">
	<img src="img/bird.png" class="bird" alt="">
	<form class="form" method="post" autocomplete="off">
		<header>
			<h1>SignUp</h1>
		</header>
		<div class="inputan">
			<label for="nama">Username :</label>
			<input type="text" name="nama" placeholder="Input Username" id="nama" required>
			<label for="password">Password :</label>
			<input type="password" name="password" placeholder="Input Password" id="password" required>
			<label for="email">Email :</label>
			<input type="email" name="email" placeholder="Input Email" id="email" required>
		</div>
		<div class="link">
			<button type="submit" name="submit" class="button">CREATE</button>
			<p>Login now ! <a href="signIn.php" class="button">Click Here</a></p>
		</div>
	</form>
</div>
</body>
</html>