<?php
session_start();
include '_config.php';

$kategori = $_POST['kategori'];

$query = "INSERT INTO kategori(kategori)VALUES('$kategori')";
$result = mysqli_query($con, $query);

if ($result) {
	$_SESSION['alertMsg'] = 'Data berhasil ditambahkan!';
} else {
	$_SESSION['alertMsg'] = 'Data gagal ditambahkan!';
}
?>

<script>
	window.location.replace('page_kategori.php');
</script>