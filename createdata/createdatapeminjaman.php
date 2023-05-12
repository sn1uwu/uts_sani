<div class="modal fade" id="Modaltambah">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Peminjaman</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post">
                    NIM
                    <input type="text" name="nim" placeholder="NIM" class="form-control" required>
                    <br>
                    Judul Buku
                    <?php $query = "SELECT * FROM tb_buku";
                    $i = 1;
                    $datas = readBuku($query) ?>
                    <select name="buku" id="judul_buku" class="form-control">
                    <?php foreach ($datas as $data) : ?>
                        <option value="<?= $data['judul_buku']; ?>"><?= $data['judul_buku']; ?></option>
                        <?php endforeach ;?>
                        </select>                    
                        <br>
                    Tanggal Pinjam
                    <input type="date" name="tgl_pinjam" placeholder="Tanggal Pinjam" class="form-control" required>
                    <br>
                    Tanggal Kembali
                    <input type="date" name="tgl_kembali" placeholder="Tanggal Kembali" class="form-control" required>
                    <br>
                    Status
                    <input type="text" name="status" placeholder="Status" class="form-control" required>
                    <br>

                    <!-- Kompetensi Keahlian
                        <input type="text" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" class="form-control" required>
                        <br> -->
                    <button type="submit" class="btn btn-primary" name="tambahbuku">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>