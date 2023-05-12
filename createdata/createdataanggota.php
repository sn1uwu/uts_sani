<div class="modal fade" id="Modaltambah">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kelas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <!-- Form -->
                <form action="" method="post">
                    NIM
                    <input type="text" name="nim" placeholder="NIM" class="form-control" required>
                    <br>
                    Nama Anggota
                    <input type="text" name="nama_anggota" placeholder="Nama Anggota" class="form-control" required>
                    <br>
                    Tempat Lahir
                    <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="form-control" required>
                    <br>
                    Tanggal Lahir
                    <input type="date" name="tgl_lahir" placeholder="Tanggal Lahir" class="form-control" required>
                    <br>
                    Gender
                    <input type="text" name="jk" placeholder="Gender" class="form-control" required>
                    <br>
                    Prodi
                    <input type="text" name="prodi" placeholder="prodi" class="form-control" required>
                    <br>
                    <!-- Kompetensi Keahlian
                        <input type="text" name="kompetensi_keahlian" placeholder="Kompetensi Keahlian" class="form-control" required>
                        <br> -->
                    <button type="submit" class="btn btn-primary" name="tambahanggota">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>