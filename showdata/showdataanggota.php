<table class="table table-striped">
    <tr>
        <th>No :</th>
        <th>NIM :</th>
        <th>Nama Anggota</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Gender</th>
        <th>Prodi</th>
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
        </tr>
    <?php endforeach; ?>
</table>