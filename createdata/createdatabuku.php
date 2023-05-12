<div class="modal fade" id="Modaltambah">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Buku</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form action="" method="post">
                    Judul Buku
                    <input type="text" name="judul_buku" placeholder="Judul Buku" class="form-control" required>
                    <br>
                    Pengarang Buku
                    <input type="text" name="pengarang_buku" placeholder="Pengarang Buku" class="form-control" required>
                    <br>
                    Penerbit Buku
                    <input type="text" name="penerbit_buku" placeholder="Penerbit Buku" class="form-control" required>
                    <br>
                    Tahun Terbit
                    <input type="text" name="tahun_terbit" placeholder="Tahun Terbit" class="form-control" required>
                    <br>
                    ISBN
                    <input type="text" name="isbn" placeholder="ISBN" class="form-control" required>
                    <br>
                    Jumlah Buku
                    <input type="text" name="jumlah_buku" placeholder="Jumlah Buku" class="form-control" required>
                    <br>
                    Lokasi
                    <select class="form-control mb-3" type="text" name="lokasi" required>
                        <option value="Rak 1" selected>Rak 1</option>
                        <option value="Rak 2">Rak 2</option>
                        <option value="Rak 3">Rak 3</option>
                    </select>
                    <br>
                    Tanggal Input
                    <input type="date" name="tgl_input" placeholder="Tanggal Input" class="form-control" required>
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