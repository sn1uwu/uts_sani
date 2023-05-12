<?php
include '../koneksi.php';
if (isset($_POST['hapusdata'])) {
    if (deleteAnggota($_POST) > 0) {
        echo "
            <script>
                alert('Data Anggota berhasil dihapus!');
                document.location.href = '../anggota.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Anggota Gagal dihapus!');
            document.location.href = '../anggota.php';
        </script>";
    }
}
