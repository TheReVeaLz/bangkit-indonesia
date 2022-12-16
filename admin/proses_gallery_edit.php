<?php
error_reporting(0);
session_start();
include '_config.php';

$id = $_POST['id'];
$desc = $_POST['desc'];
$oldFile = $_POST['oldFile'];
$dirImg = 'img_artikel/';
$msg = "";

if ($_FILES['gambar']['size'] != 0 && $_FILES['gambar']['error'] == 0) {
	$filename = $_FILES['gambar']['name'];
	$tmp_name = $_FILES['gambar']['tmp_name'];
	$target = $dirImg . $filename;
		if (!file_exists($target)) {
			if(getimagesize($tmp_name) !== false) {
				move_uploaded_file($tmp_name, $target);
				unlink($dirImg . $oldFile);
				$query = "UPDATE gallery SET gambar = '$filename', keterangan = '$desc' WHERE id = '$id'";
				$result = mysqli_query($con, $query);
				$msg .= "$filename have been uploaded.";
				$uploaded = true;
				} else {
					$msg .= "$filename is not an valid image file.";
				}
		} else {
			$msg .= "$filename is exists.";
		}
}

$update = mysqli_query($con, "UPDATE gallery SET keterangan = '$desc' WHERE id = '$id'") && mysqli_query($con, "UPDATE artikel SET gambar = '$filename' WHERE gambar = '$oldFile'");
if ($update) {
	if ($uploaded) {
		$msg .= "\\n";
	}
	$msg .= "Database updated!";
} else {
	if ($uploaded) {
		$msg .= "\\n";
	}
	$msg .= "Something is wrong in database!";
}
$_SESSION['alertMsg'] = $msg;
?>
<script>
	window.location.replace('page_gallery.php');
</script>