<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
    <?php $query = "SELECT * FROM admin";
    $i = 1;
    $datas = readAdmin($query) ?>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $data['username']; ?></td>
            <td><?= $data['password']; ?></td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['id']; ?>">
                    Edit
                </button>
                <input type="hidden" name="">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $data['id']; ?>">
                    Delete
                </button>
            </td>
        </tr>
        <!-- Modal -->
        <!-- EDIT -->
        <div class="modal fade" id="edit<?= $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="update/updateadmin.php" method="post">
                        NIM
                    <?php $query = "SELECT * FROM tb_anggota";
                    $i = 1;
                    $datas = readAnggota($query) ?>
                    <select name="anggota" id="nim" class="form-control">
                    <?php foreach ($datas as $data) : ?>
                        <option value="<?= $data['nim']; ?>"><?= $data['nim']; ?></option>
                        <?php endforeach ;?>
                        </select>       
                            <br>
                            <input type="text" name="username" value="<?= $data['username']; ?>">
                            <br>
                            <label for="nim">Password</label>
                            <br>
                            <input type="text" name="password" value="<?= $data['password']; ?>">
                            <br>>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="ubahdata">Setuju</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Hapus -->
        <div class="modal fade" id="hapus<?= $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Hapus Data?</p>
                        <form action="hapus/hapusanggota.php" method="post">
                            <input type="text" name="id_hapus" id="id_hapus" value="<?= $data['id']; ?>" hidden>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="hapusdata">Setuju</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</table>