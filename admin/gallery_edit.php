<?php include '_header.php';
error_reporting(0);
?>
<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Udah Data Artikel</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit Artikel</h5>

            <?php
            $id = $_GET['id'];
            $gambar = $_GET['gambar'];
			//$desc = $_GET['desc'];
            $data = mysqli_query($con, "SELECT * FROM gallery WHERE id = '$id'");

            $row = mysqli_fetch_array($data); ?>
            <form action="proses_gallery_edit.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
                    <div class="form-group" style="display:table-caption;caption-side:bottom;">
						<input type="hidden" name="oldFile" class="form-control" value="<?= $row['gambar'] ?>">
                        <label for="">Gambar</label><br>
                        <img src="<?= "img_artikel/" . $row['gambar'] ?>" style="max-width: 480px;max-height: 480px;">
						<input type="file" name="gambar" class="form-control" accept="image/*">
                    </div>
				    <div class="form-group">
                        <label for="">Keterangan</label>
                        <input type="text" name="desc" class="form-control" value="<?= $row['keterangan'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary ">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>