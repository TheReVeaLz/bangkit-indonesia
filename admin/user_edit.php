<?php include '_header.php'; ?>

<!-- content -->
<div class="container mt-5">
    <div class="card im-box">
        <h5 class="card-header">Ubah Data User</h5>
        <div class="card-body">
            <h5 class="card-title">Form Edit User</h5>

            <?php
            $id_user = $_GET['id'];
            //$kategori = isset($_GET['kategori']);
            $data = mysqli_query($con, "SELECT * FROM user WHERE id_user = $id_user");
            foreach ($data as $row) : ?>
                <form action="user_update.php" method="POST">
                    <input type="hidden" name="id_user" class="form-control" value="<?= $row['id_user'] ?>">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_user" class="form-control" value="<?= $row['nama_user'] ?>">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-danger " onclick="history.go(-1)">Close</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            <?php endforeach; ?>

        </div>
    </div>
</div>
<!-- ./content -->
<?php include '_footer.php'; ?>