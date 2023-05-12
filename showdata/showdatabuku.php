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
        <th>Aksi</th>
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
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['id_buku'];?>">
            Edit
            </button>
            <input type="hidden" name="">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $data['id_buku'];?>">
            Delete
            </button></td>
        </tr>
    <?php endforeach; ?>
</table>