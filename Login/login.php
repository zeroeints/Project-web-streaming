<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<img src="img/bird.png" class="bird">
	<form class="form" method="post" action="#" autocomplete="off">
		<header>
			<h1>LOGIN</h1>
		</header>
		<div class="inputan">
			<label for="nama">Nama :</label>
			<input type="text" name="nama" placeholder="masukan nama" id="nama" required>
			<label for="password">Password :</label>
			<input type="password" name="password" placeholder="masukan password" id="password" required>
			<a href="#">forget your password?</a>
		</div>
		<div class="check">
			<input type="checkbox" name="remember">
			<label>Remember me</label>
		</div>
		<div class="link">
			<button type="submit" name="submit" class="button">SUBMIT</button>
			<p>you dont have account? <a href="signUp.php" class="button">Sign Up</a></p>
		</div>
	</form>
</div>
</body>
</html>