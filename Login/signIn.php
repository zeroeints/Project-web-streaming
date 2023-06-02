<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignIn | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == 'auth') {
            include "../action/loginAction.php";
            header('location:../Apps/index.php');

        } elseif ($_GET['pesan'] == 'fail') {
            ?>
            <script>
                alert("Username/Password Salah")
                location.href = "signIn.php";
            </script>
            <?php
        }
    }
?>

<div class="container">
	<img src="img/bird.png" class="bird" alt="">
	<form class="form" method="post" action="../action/loginAction.php" autocomplete="off">
		<header>
			<h1>SignIn</h1>
		</header>
		<div class="inputan">
			<label for="nama">Username :</label>
			<input type="text" name="nama" placeholder="Masukan Username" id="nama" required>
			<label for="password">Password :</label>
			<input type="password" name="password" placeholder="Masukan Password" id="password" required>
			<a href="#">forget your password?</a>
		</div>
		<div class="check">
			<input type="checkbox" name="remember" id="remember">
			<label class="remember" for="remember">Remember me</label>
		</div>
		<div class="link">
			<button type="submit" name="submit" class="button">Login</button>
			<p>You don't have account? <a href="signUp.php" class="button">Sign Up</a></p>
		</div>
	</form>
</div>
</body>
</html>