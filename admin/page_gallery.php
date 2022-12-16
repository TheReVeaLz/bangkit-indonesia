<?php include '_header.php'; ?>
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Gallery</h5>
        <div class="card-body">
            <!--<h5 class="card-title">Lihat Data Artikel</h5>-->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAdd">
                New Image
            </button>
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th style="text-align:center;width:45px;" scope="col">#</th>
                        <th style="text-align:center;width:45px;" scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">User</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    $data = mysqli_query($con, "SELECT * FROM gallery inner join user on gallery.id_user=user.id_user ORDER BY id DESC");
                    foreach ($data as $row) :  ?>
                        <tr>
                            <th style="text-align:center;" scope="row"><?= $i++ ?></th>
                            <td style="text-align:center;"><?= $row['id']?></td>
                            <td align="center"><img src="<?= "img_artikel/" . $row['gambar']?>"draggable="false" style="max-width: 460px;max-height: 260px;"></td>
                            <td><?= $row['id_user'] . " - " . $row['nama_user']?></td>
                            <td><?= $row['keterangan']?></td>
                            <td style="text-align:center;width:160px;">
                                <!--<a class="badge badge-success" style="padding:10px" href="artikel_edit.php?id_artikel=<?= $row['id'] ?>">Edit</a>-->
								<a class="badge badge-success" style="padding:10px;width:45%;" href="gallery_edit.php?id=<?= $row['id'] ?>">Edit</a>
                                <a class="badge badge-danger" style="padding:10px;width:45%;" href="gallery_delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- ./content -->

<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">New Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="gallery_add.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="gambar" class="form-control" accept="image/*" required>
                        <label for="">Description</label>
                        <input type="desc" name="desc" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
                        <button type="submit" name="upload" class="btn btn-primary ">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ./Modal add -->
<?php include '_footer.php'; ?>