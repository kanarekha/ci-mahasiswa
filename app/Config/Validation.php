<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var string[]
	 */
	public $ruleSets = [
		Rules::class,
		FormatRules::class,
		FileRules::class,
		CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array<string, string>
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $mahasiswa = [
		'nama' => [
			'rules' => 'required|min_length[3]',
		],
		'nrp' => [
			'rules' => 'required',
		],
		'alamat' => [
			'rules' => 'required',
		],
		'telepon' => [
			'rules' => 'required',
		],
		'angkatan' => [
			'rules' => 'required',
		],
		'departemen' => [
			'rules' => 'required',
		],
		'fakultas' => [
			'rules' => 'required',
		],
		'gambar' => [
			'rules' => 'uploaded[gambar]',
		]
	];

	public $mahasiswa_errors = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'nrp' => [
			'required' => '{field} Harus diisi',
		],
		'alamat' => [
			'required' => '{field} Harus diisi',
		],
		'telepon' => [
			'required' => '{field} Harus diisi',
		],
		'angkatan' => [
			'required' => '{field} Harus diisi',
		],
		'departemen' => [
			'required' => '{field} Harus diisi',
		],
		'fakultas' => [
			'required' => '{field} Harus diisi',
		],
		'gambar' => [
			'uploaded' => '{field} Harus di upload',
		]
	];

	public $mahasiswaupdate = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'nrp' => [
			'required' => '{field} Harus diisi',
		],
		'alamat' => [
			'required' => '{field} Harus diisi',
		],
		'telepon' => [
			'required' => '{field} Harus diisi',
		],
		'angkatan' => [
			'required' => '{field} Harus diisi',
		],
		'departemen' => [
			'required' => '{field} Harus diisi',
		],
		'fakultas' => [
			'required' => '{field} Harus diisi',
		]
	];

	public $mahasiswaupdate_errors = [
		'nama' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'nrp' => [
			'required' => '{field} Harus diisi',
		],
		'alamat' => [
			'required' => '{field} Harus diisi',
		],
		'telepon' => [
			'required' => '{field} Harus diisi',
		],
		'angkatan' => [
			'required' => '{field} Harus diisi',
		],
		'departemen' => [
			'required' => '{field} Harus diisi',
		],
		'fakultas' => [
			'required' => '{field} Harus diisi',
		]
	];
}
