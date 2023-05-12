<?php
include '../koneksi.php';

if (isset($_POST['ubahdatabuku'])) {

    if (updateBuku($_POST) > 0) {
        echo "
            <script>
                alert('Data Anggota berhasil diupdate!');
                document.location.href = '../buku.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Anggota Gagal diupdate!');
            document.location.href = '../buku.php';
        </script>";
    }
}
