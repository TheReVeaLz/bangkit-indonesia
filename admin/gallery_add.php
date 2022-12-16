<?php
error_reporting(0);
include '_config.php';
session_start();

$desc = $_POST['desc'];
$filename = $_FILES['gambar']['name'];
$tmp_name = $_FILES['gambar']['tmp_name'];
$target = 'img_artikel/' . $filename;
if(isset($_POST["upload"])) {
	if (!file_exists($target)) {
		if(getimagesize($tmp_name) !== false) {
			move_uploaded_file($tmp_name, $target);
			$query = "INSERT INTO gallery (gambar, id_user, keterangan) VALUES ('$filename', '".$_SESSION['id']."', '$desc')";
			$result = mysqli_query($con, $query);
			$_SESSION['alertMsg'] = "$filename have been uploaded.";
			} else {
				$_SESSION['alertMsg'] = "$filename is not an valid image file.";
			}
	} else {
		$_SESSION['alertMsg'] = "$filename is exists.";
	}
}
?>
<script>
	window.location.replace('page_gallery.php');
</script>