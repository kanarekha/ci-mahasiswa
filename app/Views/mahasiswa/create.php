<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<?php

$nama = [
    'name' => 'nama',
    'id' => 'nama',
    'value' => null,
    'class' => 'form-control',
];

$nrp = [
    'name' => 'nrp',
    'id' => 'nrp',
    'value' => null,
    'class' => 'form-control',
    'type' => 'number',
    'min' => 0,
];

$alamat = [
    'name' => 'alamat',
    'id' => 'alamat',
    'value' => null,
    'class' => 'form-control',
];

$telepon = [
    'name' => 'telepon',
    'id' => 'telepon',
    'value' => null,
    'class' => 'form-control',
];

$angkatan = [
    'name' => 'angkatan',
    'id' => 'angkatan',
    'value' => null,
    'class' => 'form-control',
];

$departemen = [
    'name' => 'departemen',
    'id' => 'departemen',
    'value' => null,
    'class' => 'form-control',
];

$fakultas = [
    'name' => 'fakultas',
    'id' => 'fakultas',
    'value' => null,
    'class' => 'form-control',
];

$gambar = [
    'name' => 'gambar',
    'id' => 'gambar',
    'value' => null,
    'class' => 'form-control',
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'value' => 'Submit',
    'class' => 'btn btn-success',
    'type' => 'submit',
];

?>
<h1>Tambah Mahasiswa</h1>

<?= form_open_multipart('Mahasiswa/create') ?>
<div class="form-group mb-3">
    <?= form_label("Nama", "nama") ?>
    <?= form_input($nama) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("nrp", "nrp") ?>
    <?= form_input($nrp) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("alamat", "alamat") ?>
    <?= form_input($alamat) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("telepon", "telepon") ?>
    <?= form_input($telepon) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("angkatan", "angkatan") ?>
    <?= form_input($angkatan) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("departemen", "departemen") ?>
    <?= form_input($departemen) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("fakultas", "fakultas") ?>
    <?= form_input($fakultas) ?>
</div>

<div class="form-group mb-3">
    <?= form_label("Gambar", "gambar") ?>
    <?= form_upload($gambar) ?>
</div>

<div class="text-right mb-3">
    <?= form_submit($submit) ?>
</div>

<?= form_close() ?>
<?= $this->endSection() ?>