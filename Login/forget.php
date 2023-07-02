<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SignIn | page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php
	include '../koneksi.php';
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$data = mysqli_query($koneksi,"SELECT * FROM user");
		while ($datas = mysqli_fetch_assoc($data)) {
			if ($datas['email'] == $email) {
				mysqli_query($koneksi, "UPDATE user SET password='$password' WHERE email='$email'");
			}
		}
	}
?>
<div class="container">
	<form class="form" method="post" action="" autocomplete="off">
		<header>
			<div class="logo">
				<div class="bulat"><i class="bi bi-film"></i></div>
				<h5>Netclip</h5>
			</div>
		</header>
		<div class="inputan">
			<input type="email" name="email" id="email" required>
			<label for="email" class="user">Email :</label>
			<input type="password" name="password" id="password" required>
			<label for="password">New Password :</label>
		</div>
		
		<div class="link">
			<button type="submit" name="submit" class="button">UPDATE</button>
			<a href="signIn.php">Sign In</a>
		</div>
	</form>
</div>
</body>
</html>