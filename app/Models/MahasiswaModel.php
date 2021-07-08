<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
	protected $table = 'mahasiswa';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama', 'nrp', 'alamat', 'telepon', 'angkatan', 'departemen', 'fakultas', 'gambar', 'created_date', 'updated_date'
	];
	protected $returnType = 'App\Entities\Mahasiswa';
	protected $useTimestamps = false;
}
