<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Mahasiswa extends Entity
{
    public function setGambar($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './uploads';
        $file->move($writePath, $fileName);
        $this->attributes['gambar'] = $fileName;
        return $this;
    }
}
