<?php

$user = "root";
$server = "localhost";
$password = "";
$database = "uts_perpus";

$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));


// ADMIN
function registerAdmin($data)
{
    global $koneksi;
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $query = "INSERT INTO admin VALUES ('','$username','$password')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


// BUKU
function createBuku($data)
{
    global $koneksi;
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $pengarang_buku = htmlspecialchars($data["pengarang_buku"]);
    $penerbit_buku = htmlspecialchars($data["penerbit_buku"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $isbn = htmlspecialchars($data["isbn"]);
    $jumlah_buku = htmlspecialchars($data["jumlah_buku"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $tgl_input = htmlspecialchars($data["tgl_input"]);

    $query = "INSERT INTO buku VALUES ('','$judul_buku','$pengarang_buku','$penerbit_buku','$tahun_terbit','$isbn','$jumlah_buku','$lokasi','$tgl_input')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}


// ANGGOTA
function createAnggota($data)
{
    global $koneksi;
    $nim = htmlspecialchars($data["nim"]);
    $nama_anggota = htmlspecialchars($data["nama_anggota"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $jk = htmlspecialchars($data["jk"]);
    $prodi = htmlspecialchars($data["prodi"]);

    $query = "INSERT INTO anggota VALUES ('','$nim','$nama_anggota','$tempat_lahir','$tgl_lahir','$jk','$prodi')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

// PEMINJAMAN .
function createPeminjaman($data)
{
    global $koneksi;
    $id_buku = htmlspecialchars($data["id_buku"]);
    $nim_transaksi = htmlspecialchars($data["nim_transaksi"]);
    $id_anggota = htmlspecialchars($data["id_anggota"]);
    $tgl_pinjem = htmlspecialchars($data["tgl_pinjem"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);
    $status = htmlspecialchars($data["status"]);

    $query = "INSERT INTO peminjaman VALUES ('','$id_buku','$nim_transaksi','$id_anggota','$tgl_pinjem','$tgl_kembali','$status')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function updatePeminjaman($data)
{
    global $koneksi;
    $id_transaksi = htmlspecialchars($data["id_transaksi"]);
    $id_buku = htmlspecialchars($data["id_buku"]);
    $nim_transaksi = htmlspecialchars($data["nim_transaksi"]);
    $id_anggota = htmlspecialchars($data["id_anggota"]);
    $tgl_pinjem = htmlspecialchars($data["tgl_pinjem"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE peminjaman SET id_buku = '$id_buku', nim_transaksi = '$nim_transaksi', id_anggota = '$id_anggota', tgl_pinjem = '$tgl_pinjem', tgl_kembali = '$tgl_kembali', status = '$status' WHERE id_transaksi = '$id_transaksi'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
