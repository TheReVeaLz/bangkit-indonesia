<?php
error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
	$msg = "Selamat Datang, " . $_SESSION['nama_user'] ."!";
	echo "<script>alert('$msg')</script>";
	header('Location: .');
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM user WHERE username=BINARY '$username' AND password=BINARY '$password'";
	$result = mysqli_query($con, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $row['id_user'];
		$_SESSION['username'] = $row['username'];
		$_SESSION['nama_user'] = $row['nama_user'];
		header('Location: .');
	} else {
		echo "<script type='text/javascript'>window.addEventListener('load', () => {alert('Username atau password Anda salah. Silahkan coba lagi!');});</script>";
	}
}
?>