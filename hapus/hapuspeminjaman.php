<?php
include '../koneksi.php';
if (isset($_POST['hapusdata'])) {
    if (deleteBuku($_POST) > 0) {
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
