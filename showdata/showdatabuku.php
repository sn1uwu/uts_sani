<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>Judul Buku :</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Tanggal Input</th>
        <th>Aksi</th>
    </tr>
    <?php $query = "SELECT * FROM tb_buku";
    $i = 1;
    $datas = readBuku($query) ?>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $data['judul_buku']; ?></td>
            <td><?= $data['pengarang_buku']; ?></td>
            <td><?= $data['tahun_terbit']; ?></td>
            <td><?= $data['tgl_input']; ?></td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['id_buku']; ?>">
                    Edit
                </button>
                <input type="hidden" name="">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?= $data['id_buku']; ?>">
                    Delete
                </button>
            </td>
        </tr>
        <!-- Modal -->
        <!-- EDIT -->
        <div class="modal fade" id="edit<?= $data['id_buku']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="update/updatebuku.php" method="post">
                            <input type="text" name="id_buku" id="id_buku" value="<?= $data['id_buku']; ?>" hidden>
                            <label for="judul_buku">Judul Buku : </label>
                            <br>
                            <input type="text" name="judul_buku" value="<?= $data['judul_buku']; ?>">
                            <br>
                            <label for="pengarang_buku">Pengarang Buku : </label>
                            <br>
                            <input type="text" name="pengarang_buku" value="<?= $data['pengarang_buku']; ?>">
                            <br>
                            <label for="tahun_terbit">Tahun Terbit : </label>
                            <br>
                            <input type="text" name="tahun_terbit" value="<?= $data['tahun_terbit']; ?>">
                            <br>
                            <label for="tgl_input">Tanggal Input : </label>
                            <input type="date" name="tgl_input" value="<?= $data['tgl_input']; ?>">

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="ubahdatabuku">Setuju</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!-- Hapus -->
        <div class="modal fade" id="hapus<?= $data['id_buku']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Yakin Hapus Data?</p>
                        <form action="hapus/hapusbuku.php" method="post">
                            <input type="text" name="id_hapus" id="id_hapus" value="<?= $data['id_buku']; ?>" hidden>


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