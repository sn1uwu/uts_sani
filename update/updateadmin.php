<?php
include '../koneksi.php';

if (isset($_POST['ubahdata'])) {
    if (updateAdmin($_POST) > 0) {
        echo "
            <script>
                alert('Data Anggota berhasil diupdate!');
                document.location.href = '../admin.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Anggota Gagal diupdate!');
            document.location.href = '../admin.php';
        </script>";
    }
}