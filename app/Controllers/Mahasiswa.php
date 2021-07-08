<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        $MahasiswaModel = new \App\Models\MahasiswaModel();
        $mahasiswa = $MahasiswaModel->findAll();

        return view('mahasiswa/index', [
            'mahasiswas' => $mahasiswa,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);

        $MahasiswaModel = new \App\Models\MahasiswaModel();

        $mahasiswa = $MahasiswaModel->find($id);

        return view('mahasiswa/view', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            //jika ada data yang di post
            $data = $this->request->getPost();
            $this->validation->run($data, 'mahasiswa');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                //simpan datanya
                $MahasiswaModel = new \App\Models\MahasiswaModel();

                $mahasiswa = new \App\Entities\mahasiswa();

                $mahasiswa->fill($data);
                $mahasiswa->gambar = $this->request->getFile('gambar');
                $mahasiswa->created_date = date("Y-m-d H:i:s");

                $MahasiswaModel->save($mahasiswa);

                $id = $MahasiswaModel->insertID();

                $segments = ['mahasiswa', 'view', $id];
                return redirect()->to(site_url($segments));
            }
        }
        return view('mahasiswa/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $MahasiswaModel = new \App\Models\MahasiswaModel();

        $mahasiswa = $MahasiswaModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'mahasiswaupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\mahasiswa();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }

                $b->updated_date = date("Y-m-d H:i:s");

                $MahasiswaModel->save($b);

                $segments = ['mahasiswa', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('mahasiswa/update', [
            'mahasiswa' => $mahasiswa,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelmahasiswa = new \App\Models\MahasiswaModel();
        $delete = $modelmahasiswa->delete($id);

        return redirect()->to(site_url('mahasiswa/index'));
    }
}
