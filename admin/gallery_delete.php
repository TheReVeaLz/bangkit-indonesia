<?php
error_reporting(0);
include '_config.php';
session_start();

$dir = "img_artikel/";
$id = $_GET['id'];
$sql = "SELECT gambar FROM gallery WHERE id = $id";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
	while($row = mysqli_fetch_assoc($result)) {
		$filename = $row["gambar"];
		$file = $dir . $filename;
		if (file_exists($file)) {
			unlink($file);
			mysqli_query($con, "DELETE FROM gallery WHERE id = $id");
			$_SESSION['alertMsg'] = "$filename succesfully removed.";
		} else {
			$_SESSION['alertMsg'] = "Something is wrong.";
		}
	}
}
?>
<script>
	window.location.replace('page_gallery.php');
</script>