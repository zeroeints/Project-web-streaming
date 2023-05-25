<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignUp | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<img src="bird.png" class="bird">
	<form class="form" method="post" action="#" autocomplete="off">
		<header>
			<h1>SignUp</h1>
		</header>
		<div class="inputan">
			<label for="nama">Nama :</label>
			<input type="text" name="nama" placeholder="input nama" id="nama" required>
			<label for="password">Password :</label>
			<input type="password" name="password" placeholder="input password" id="password" required>
			<label for="email">Email :</label>
			<input type="email" name="email" placeholder="input email" id="email" required>
		</div>
		<div class="link">
			<button type="submit" name="submit" class="button">CREATE</button>
			<p>Login now ! <a href="login.php" class="button">Click Here</a></p>
		</div>
	</form>
</div>
</body>
</html>