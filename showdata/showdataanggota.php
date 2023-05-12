<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>NIM :</th>
        <th>Nama Anggota</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Prodi</th>
        <th>Aksi</th>
    </tr>
    <?php $query = "SELECT * FROM tb_anggota";
    $i = 1;
    $datas = readAnggota($query) ?>
    <?php foreach ($datas as $data) : ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $data['nim']; ?></td>
            <td><?= $data['nama_anggota']; ?></td>
            <td><?= $data['tempat_lahir']; ?></td>
            <td><?= $data['tgl_lahir']; ?></td>
            <td><?= $data['jk']; ?></td>
            <td><?= $data['prodi']; ?></td>
            <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit<?= $data['id_anggota'];?>">
            Edit
            </button>
            <input type="hidden" name="">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete<?= $data['id_anggota'];?>">
            Delete
            </button></td>
        </tr>
    <?php endforeach; ?>
</table>