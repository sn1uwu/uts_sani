<?php
include '../koneksi.php';
if (isset($_POST['hapusdata'])) {
    if (deleteAdmin($_POST) > 0) {
        echo "
            <script>
                alert('Data Admin berhasil dihapus!');
                document.location.href = '../admin.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Admin Gagal dihapus!');
            document.location.href = '../admin.php';
        </script>";
    }
}
