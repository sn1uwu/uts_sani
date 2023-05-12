<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>NIM :</th>
        <th>Nama Anggota</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php $query = "SELECT * FROM tb_anggota";
    $i = 1;
    $datas = readAnggota($query) ?>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $data['nim']; ?></td>
            <td><?= $data['nama_anggota']; ?></td>
            <td><?= $data['tgl_lahir']; ?></td>
            <td><?= $data['jk']; ?></td>
            <td><?= $data['prodi']; ?></td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['id_anggota']; ?>">
                    Edit
                </button>
                <input type="hidden" name="">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $data['id_anggota']; ?>">
                    Delete
                </button>
            </td>
        </tr>
        <!-- Modal -->
        <!-- EDIT -->
        <div class="modal fade" id="edit<?= $data['id_anggota']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="update/updateanggota.php" method="post">
                            <input type="text" name="id_anggota" id="id_anggota" value="<?= $data['id_anggota']; ?>" hidden>
                            <label for="nim">NIM : </label>
                            <br>
                            <input type="text" name="nim" value="<?= $data['nim']; ?>">
                            <br>
                            <label for="nim">Nama Anggota : </label>
                            <br>
                            <input type="text" name="nama_anggota" value="<?= $data['nama_anggota']; ?>">
                            <br>
                            <label for="nim">Tanggal Lahir : </label>
                            <br>
                            <input type="text" name="tgl_lahir" value="<?= $data['tgl_lahir']; ?>">
                            <br>
                            <label for="nim">Gender : </label>
                            <br>
                            <input type="text" name="jk" value="<?= $data['jk']; ?>">
                            <br>
                            <label for="nim">Prodi : </label>
                            <br>
                            <input type="text" name="prodi" value="<?= $data['prodi']; ?>">

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
        <div class="modal fade" id="hapus<?= $data['id_anggota']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Hapus Data?</p>
                        <form action="hapus/hapusanggota.php" method="post">
                            <input type="text" name="id_hapus" id="id_hapus" value="<?= $data['id_anggota']; ?>" hidden>


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