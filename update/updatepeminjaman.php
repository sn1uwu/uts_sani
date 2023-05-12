<?php
include '../koneksi.php';

if (isset($_POST['ubahdatapeminjaman'])) {

    if (updatePeminjaman($_POST) > 0) {
        echo "
            <script>
                alert('Data Anggota berhasil diupdate!');
                document.location.href = '../peminjaman.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Anggota Gagal diupdate!');
            document.location.href = '../peminjaman.php';
        </script>";
    }
}
