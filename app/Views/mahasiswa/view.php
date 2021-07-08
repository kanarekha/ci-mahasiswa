<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<h3 class="mb-3">View Mahasiswa</h3>
<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <img class="img-fluid" width="220px" alt="image" src="<?= base_url('uploads/' . $mahasiswa->gambar) ?>" />
                </div>
            </div>
        </div>
        <div class="col-6">
            <h4>Nama : <?= $mahasiswa->nama ?></h4>
            <h4>Nrp : <?= $mahasiswa->nrp ?></h4>
            <h4>Alamat : <?= $mahasiswa->alamat ?></h4>
            <h4>Telepon : <?= $mahasiswa->telepon ?></h4>
            <h4>angkatan : <?= $mahasiswa->angkatan ?></h4>
            <h4>Departemen : <?= $mahasiswa->departemen ?></h4>
            <h4>Fakultas : <?= $mahasiswa->fakultas ?></h4>
        </div>
    </div>
</div>

<?= $this->endSection() ?>