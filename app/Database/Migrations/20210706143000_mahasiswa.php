<?php

namespace App\Database\Migrations;

class Mahasiswa extends \CodeIgniter\Database\Migration
{

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nrp' => [
                'type' => 'VARCHAR',
                'constraint' => '14',
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'telepon' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'angkatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'departemen' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'fakultas' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'gambar' => [
                'type' => 'TEXT',
            ],
            'created_date' => [
                'type' => 'DATETIME',
            ],
            'updated_date' => [
                'type' => 'DATETIME',
                'null' => TRUE,
            ]
        ]);

        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('mahasiswa');
    }
}
