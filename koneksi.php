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

    $query = "INSERT INTO admin VALUES (NULL,'$username','$password')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function updateAdmin($data)
{
    global $koneksi;
    $id = $data["id"];
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);

    $query = "UPDATE admin SET username='$username', password='$password' WHERE id='$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function deleteAdmin($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM admin WHERE id=$id");
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

    $query = "INSERT INTO tb_buku VALUES (NULL,'$judul_buku','$pengarang_buku','$penerbit_buku','$tahun_terbit','$isbn','$jumlah_buku','$lokasi','$tgl_input')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
function updateBuku($data)
{
    global $koneksi;
    $id_buku = htmlspecialchars($data["id_buku"]);
    $judul_buku = htmlspecialchars($data["judul_buku"]);
    $pengarang_buku = htmlspecialchars($data["pengarang_buku"]);
    $penerbit_buku = htmlspecialchars($data["penerbit_buku"]);
    $tahun_terbit = htmlspecialchars($data["tahun_terbit"]);
    $isbn = htmlspecialchars($data["isbn"]);
    $jumlah_buku = htmlspecialchars($data["jumlah_buku"]);
    $lokasi = htmlspecialchars($data["lokasi"]);
    $tgl_input = htmlspecialchars($data["tgl_input"]);

    $query = "UPDATE tb_buku SET judul_buku = '$judul_buku', pengarang_buku = '$pengarang_buku', penerbit_buku = '$penerbit_buku', tahun_terbit = '$tahun_terbit', isbn = '$isbn', jumlah_buku = '$jumlah_buku', lokasi = '$lokasi', tgl_input = '$tgl_input' WHERE id_buku = '$id_buku'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function deleteBuku($data)
{
    global $koneksi;
    $id_buku = htmlspecialchars($data["id_hapus"]);
    $query = "DELETE FROM tb_buku WHERE id_buku = $id_buku";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function readBuku($data)
{
    global $koneksi;
    $query = $data;
    $result = mysqli_query($koneksi, $query);
    return $result;
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

    $query = "INSERT INTO tb_anggota VALUES (NULL,'$nim','$nama_anggota','$tempat_lahir','$tgl_lahir','$jk','$prodi')";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function updateAnggota($data)
{
    global $koneksi;
    $id_anggota = htmlspecialchars($data["id_anggota"]);
    $nim = htmlspecialchars($data["nim"]);
    $nama_anggota = htmlspecialchars($data["nama_anggota"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $jk = htmlspecialchars($data["jk"]);
    $prodi = htmlspecialchars($data["prodi"]);

    $query = "UPDATE tb_anggota SET nim = '$nim', nama_anggota = '$nama_anggota', tempat_lahir = '$tempat_lahir', tgl_lahir = '$tgl_lahir', jk = '$jk', prodi = '$prodi' WHERE id_anggota = '$id_anggota'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function deleteAnggota($data)
{
    global $koneksi;
    $id_anggota = htmlspecialchars($data["id_hapus"]);
    $query = "DELETE FROM tb_anggota WHERE id_anggota = '$id_anggota'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function readAnggota($data)
{
    global $koneksi;
    $query = $data;
    $result = mysqli_query($koneksi, $query);
    return $result;
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

    $query = "INSERT INTO tb_peminjaman VALUES ('','$id_buku','$nim_transaksi','$id_anggota','$tgl_pinjem','$tgl_kembali','$status')";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function updatePeminjaman($data)
{
    global $koneksi;
    $id_transaksi = $data["id_transaksi"];
    $id_buku = htmlspecialchars($data["id_buku"]);
    $nim_transaksi = htmlspecialchars($data["nim_transaksi"]);
    $id_anggota = htmlspecialchars($data["id_anggota"]);
    $tgl_pinjem = htmlspecialchars($data["tgl_pinjem"]);
    $tgl_kembali = htmlspecialchars($data["tgl_kembali"]);
    $status = htmlspecialchars($data["status"]);

    $query = "UPDATE tb_peminjaman SET id_buku = '$id_buku', nim_transaksi = '$nim_transaksi', id_anggota = '$id_anggota', tgl_pinjem = '$tgl_pinjem', tgl_kembali = '$tgl_kembali', status = '$status' WHERE id_transaksi = '$id_transaksi'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function deletePeminjaman($data)
{
    global $koneksi;
    $id_transaksi = htmlspecialchars($data["id_transaksi"]);
    $query = "DELETE FROM peminjaman WHERE id_transaksi = '$id_transaksi'";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}
