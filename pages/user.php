<?php
include 'controller/connect.php';
$query = mysqli_query($con, "SELECT * FROM tb_user");
while ($data = mysqli_fetch_array($query)) {
    $user[] = $data;
}
?>

<div class="konten col-lg rounded">
    <div class="card">
        <div class="card-header fw-bold">
            Halaman User
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                    <h4>Data User</h4>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">Add User</button>
                </div>
            </div>
            <!-- Modal Add User-->
            <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="">
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Your Name">
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput" placeholder="username@example.com">
                                            <label for="floatingInput">Username</label>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="********">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-md-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected disabled hidden>Pilih Level</option>
                                                <option value="1">Admin</option>
                                                <option value="2">Pelayan</option>
                                                <option value="3">Kasir</option>
                                                <option value="4">Dapur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col col-md-8">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" id="floatingPassword" placeholder="08xxxxxxx">
                                            <label for="floatingInput">No Hp</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea name="" class="form-control" id="" style="height: 100px;"></textarea>
                                    <label for="floatingInput">Alamat</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal Add User -->

            <!-- Modal View User-->
            <div class="modal fade" id="viewUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Detail User</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Modal View User -->
            <?php
            if (empty($user)) {
                echo "Tidak ada data";
            } else {
            ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Username</th>
                                <th scope="col">Level</th>
                                <th scope="col">No Hp</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($user as $row) {
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no++ ?></th>
                                    <td><?php echo $row['username'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['level'] ?></td>
                                    <td><?php echo $row['nohp'] ?></td>
                                    <td>
                                        <div class="d-flex gap-1">
                                            <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewUser"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
        </div>
    <?php
            }
    ?>
    </div>
</div>
</div>