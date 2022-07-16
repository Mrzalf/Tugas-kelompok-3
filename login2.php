<?php 
	include("config.php");

	 var_dump($_POST);

	// Inisialisasi Variable
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Cek Username
	$user = $connect->query("SELECT * FROM `sign_up` WHERE username = '$username'");
	if ($user->num_rows > 1) {
		 $_SESSION['notif'] = "Gagal login, Username atau Password salah";
	    header("Location: login.php");
	    die();
	}

	// Cek Password
	$user = $user->fetch_assoc();
	if ($password != $user['password']) {
		 $_SESSION['notif'] = "Gagal login, Username atau Password salah";
	    header("Location: login.php");
	    die();
	} 
	else {
	    header("Location: index.php");
	    die();
	}
?>