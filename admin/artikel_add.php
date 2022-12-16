<?php
include '_config.php';
session_start();

$judul = $_POST['judul'];
$artikel = $_POST['artikel'];
$tanggal = $_POST['tanggal'];
$kategori = $_POST['id_kategori'];

//upload dan simpan artikel
$namafile = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_name, 'img_artikel/' . $namafile);

$query = "INSERT INTO artikel(judul, artikel, tanggal, gambar, id_kategori) VALUES(
    '" . $judul . "',
    '" . $artikel . "',
    '" . $tanggal . "',
    '" . $namafile . "',
    '" . $kategori . "'
    )";

$result = mysqli_query($con, $query);

if ($result) {
	if ($_FILES['gambar']!=null) {
		$query = "INSERT INTO gallery (gambar, id_user) VALUES ('$namafile', '".$_SESSION['id']."')";
		$result = mysqli_query($con, $query);
	}
	$_SESSION['alertMsg'] = "Article successfully added!";
	} else { 
		$_SESSION['alertMsg'] = "Something is wrong!";
}
?>
<script>
	window.location.replace('page_artikel.php');
</script>