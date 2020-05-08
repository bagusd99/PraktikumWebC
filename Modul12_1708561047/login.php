<?php 

require 'function.php';
if( isset($_POST["login"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($koneksi, "SELECT * FROM akun WHERE username = '$username'");

	if( mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if($password == $row["password"]) {

			$_SESSION["login"] = true;
			$_SESSION["username"] = $row["username"];
			$_SESSION["role"] = $row["role"];
			header("Location: index.php");
			exit;
		}
	}

	$error = true;
}
if( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="masok" >
    <h1>Halaman Login</h1><br>
    <div class="kotak_login">
		<?php if(isset($error)) : ?>
			<p style="color: red;">username/password salah!</p>
		<?php endif; ?>
        <form action="" method="post">
            <label for="username"> Username
                <input type="text" name="username" id="username" class="form-login" placeholder="Masukkan username">
            </label><br><br>
            <label for="username"> Password
                <input type="password" name="password" id="password" class="form-login" placeholder="Masukkan password">
            </label>
			<br><br>
            <input type="submit" name="login" class="tombol-login" value="LOGIN">

            <br>
            <br>
        </form>
    </div></div>
    
</body>
</html>