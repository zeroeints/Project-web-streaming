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
	<form class="form" method="post" action="../action/loginAction.php" autocomplete="off">
		<header>
			<div class="logo">
				<div class="bulat"><i class="bi bi-film"></i></div>
				<h5>Netclip</h5>
			</div>
		</header>
		<div class="inputan">
			<input type="text" name="nama" id="nama" required>
			<label for="nama" class="user">Username :</label>
			<input type="password" name="password" id="password" required>
			<label for="password">Password :</label>
			<a href="#">forget your password?</a>
		</div>
		
		<div class="link">
			<button type="submit" name="submit" class="button">MASUK</button>
			<a href="signUp.php">Sign Up</a>
		</div>
	</form>
</div>
</body>
</html>