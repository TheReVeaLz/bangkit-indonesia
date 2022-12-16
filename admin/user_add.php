<?php
session_start();
include '_config.php';

$nama = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = "INSERT INTO user(nama_user, username, password) VALUES ('$nama', '$username', '$password')";
$result = mysqli_query($con, $query);

if ($result) {
	$_SESSION['alertMsg'] = 'Data berhasil ditambahkan!';
} else {
	$_SESSION['alertMsg'] = 'Data Gagal ditambahkan!';
}
?>

<script>
	window.location.replace('page_user.php');
</script>