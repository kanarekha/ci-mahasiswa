<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<h1>Mahasiswa</h1>
<table class="table">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Nrp</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Angkatan</th>
        <th>Departemen</th>
        <th>Fakultas</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($mahasiswas as $index => $mahasiswa) : ?>
            <tr>
                <td><?= ($index + 1) ?></td>
                <td><?= $mahasiswa->nama ?></td>
                <td><?= $mahasiswa->nrp ?></td>
                <td><?= $mahasiswa->alamat ?></td>
                <td><?= $mahasiswa->telepon ?></td>
                <td><?= $mahasiswa->angkatan ?></td>
                <td><?= $mahasiswa->departemen ?></td>
                <td><?= $mahasiswa->fakultas ?></td>
                <td>
                    <img class="img-fluid" width="50px" alt="gambar" src="<?= base_url('uploads/' . $mahasiswa->gambar) ?>" />
                </td>
                <td>
                    <a href="<?= site_url('mahasiswa/view/' . $mahasiswa->id) ?>" class="btn btn-primary">View</a>
                    <a href="<?= site_url('mahasiswa/update/' . $mahasiswa->id) ?>" class="btn btn-success">Update</a>
                    <a href="<?= site_url('mahasiswa/delete/' . $mahasiswa->id) ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>