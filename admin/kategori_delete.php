<?php
session_start();
include '_config.php';

$id_kategori = $_GET['id_kategori'];

$delete = mysqli_query($con, "DELETE FROM kategori WHERE id_kategori = $id_kategori");

if ($delete) {
	$_SESSION['alertMsg'] = 'Data berhasil dihapus!';
} else {
	$_SESSION['alertMsg'] = 'Data gagal dihapus!';
}
?>

<script>
	window.location.replace('page_kategori.php');
</script>