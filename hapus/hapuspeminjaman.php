<?php
include '../koneksi.php';
if (isset($_POST['hapusdatapeminjaman'])) {
    if (deletePeminjaman($_POST) > 0) {
        echo "
            <script>
                alert('Data Anggota berhasil dihapus!');
                document.location.href = '../peminjaman.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Anggota Gagal dihapus!');
            document.location.href = '../peminjaman.php';
        </script>";
    }
}
