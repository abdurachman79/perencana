<?php

namespace App\Controllers;

use App\Entities\BidangEntity;
use App\Libraries\ModelLoader;

class Bidang extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = ModelLoader::fetch('BidangModel');
    }

    public function index()
    {
        $data = [
            'title'  => 'Data Bidang',
            'bidang' => $this->model->findAll()
        ];
        return view('bidang/view_bidang', $data);
    }

    public function simpan()
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $bidangEntity = new BidangEntity($post);
            $this->model->save($bidangEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
        return redirect()->to(base_url('bidang'));
    }

    public function update($id)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $bidangEntity = new BidangEntity($post);
            $this->model->update($id, $bidangEntity);
            session()->setFlashdata('flashdata', 'Data berhasil diubah');
        }
        return redirect()->to(base_url('bidang'));
    }
}
