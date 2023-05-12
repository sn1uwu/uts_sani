<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>Judul Buku :</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
        <th>Tahun Terbit</th>
        <th>ISBN</th>
        <th>Jumlah Buku</th>
        <th>Lokasi</th>
        <th>Tanggal Input</th>
        <th>Data Aksi</th>
    </tr>
    <?php $query = "SELECT * FROM tb_buku";
    $i = 1;
    $datas = readBuku($query) ?>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $data['judul_buku']; ?></td>
            <td><?= $data['pengarang_buku']; ?></td>
            <td><?= $data['penerbit_buku']; ?></td>
            <td><?= $data['tahun_terbit']; ?></td>
            <td><?= $data['isbn']; ?></td>
            <td><?= $data['jumlah_buku']; ?></td>
            <td><?= $data['lokasi']; ?></td>
            <td><?= $data['tgl_input']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>