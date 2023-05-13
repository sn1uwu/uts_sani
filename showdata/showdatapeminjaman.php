<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>NIM :</th>
        <th>Judul Buku</th>
        <th>Tanggal Pinjam</th>
        <th>Tanggal Kembali</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
    <?php $query = "SELECT * FROM tb_transaksi INNER JOIN tb_buku ON tb_transaksi.id_buku = tb_buku.id_buku INNER JOIN tb_anggota ON tb_transaksi.id_anggota = tb_anggota.id_anggota";
    $i = 1;
    $datas = readBuku($query) ?>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <!-- testing -->
            <td><?= $i++; ?></td>
            <td><?= $data['nim']; ?></td>
            <td><?= $data['judul_buku']; ?></td>
            <td><?= $data['tgl_pinjam']; ?></td>
            <td><?= $data['tgl_kembali']; ?></td>
            <td><?= $data['status']; ?></td>

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
                        <form action="update/updatepeminjaman.php" method="post">
                            <label for="judul_buku">NIM : </label>
                            <br>
                            <input type="text" name="nim_transaksi" id="nim_transaksi" value="<?= $data['nim']; ?>">
                            <br>
                            Judul Buku
                            <?php $query = "SELECT * FROM tb_buku";
                            $i = 1;
                            $trans = readBuku($query) ?>
                            <input type="text" name="id_anggota" id="id_anggota" value="<?= $data['id_anggota']; ?>" hidden>
                            <input type="text" name="id_transaksi" value="<?= $data['id_transaksi']; ?>" hidden>

                            <select name="id_buku" id="id_buku" class="form-control">
                                <?php foreach ($trans as $tran) : ?>
                                    <option value="<?= $tran['id_buku']; ?>"><?= $tran['judul_buku']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <label for="tgl_pinjam">Tanggal Pinjam</label>
                            <br>
                            <input type="date" name="tgl_pinjam" value="<?= $data['tgl_pinjam']; ?>">
                            <br>
                            <label for="nim">Tanggal Kembali : </label>
                            <br>
                            <input type="date" name="tgl_kembali" value="<?= $data['tgl_kembali']; ?>">
                            <br>
                            <label for="status">Status</label>
                            <br>
                            <input type="text" name="status" value="<?= $data['status']; ?>">
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" name="ubahdatapeminjaman">Setuju</button>
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