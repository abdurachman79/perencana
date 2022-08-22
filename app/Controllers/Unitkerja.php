<?php

namespace App\Controllers;

use App\Entities\TipeUnitkerjaEntity;
use App\Entities\UnitkerjaEntity;
use App\Models\TipeUnitkerjaModel;
use App\Models\UnitkerjaModel;

class Unitkerja extends BaseController
{
    protected $model;
    protected $tipeModel;

    public function __construct()
    {
        $this->model = new UnitkerjaModel();
        $this->tipeModel = new TipeUnitkerjaModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Unit Kerja',
            'tipe'      => $this->tipeModel->findAll(),
            'unitkerja' => $this->model->findAll()
        ];
        return view('unitkerja/view_unitkerja', $data);
    }

    public function tipe()
    {
        $data = [
            'title'  => 'Tipe Unit Kerja',
            'tipe'   => $this->tipeModel->findAll()
        ];
        return view('unitkerja/view_tipe_unitkerja', $data);
    }


    /************* Tipe Unit Kerja CRUD Start ************/
    public function simpantipe()
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $tipeEntity = new TipeUnitkerjaEntity();
            $tipeEntity->fill($post);
            $this->tipeModel->save($tipeEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
        return redirect()->to(base_url('unitkerja/tipe'));
    }

    public function updatetipe($id)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $tipeEntity = new TipeUnitkerjaEntity();
            $tipeEntity->fill($post);
            $this->tipeModel->update($id, $tipeEntity);
            session()->setFlashdata('flashdata', 'Data berhasil diubah');
        }
        return redirect()->to(base_url('unitkerja/tipe'));
    }

    /************* Tipe Unit Kerja CRUD End ************/


    /************* Unit Kerja CRUD Start ************/

    public function simpan()
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $unitEntity = new UnitkerjaEntity();
            $unitEntity->fill($post);
            $this->model->save($unitEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
        return redirect()->to(base_url('unitkerja'));
    }

    public function update($id)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $unitEntity = new UnitkerjaEntity();
            $unitEntity->fill($post);
            $this->model->update($id, $unitEntity);
            session()->setFlashdata('flashdata', 'Data berhasil diubah');
        }
        return redirect()->to(base_url('unitkerja'));
    }

    /************* Unit Kerja CRUD End ************/

    public function coba()
    {
        $unit = $this->model->find(1);
        dd($unit->tipe);
        // dd($unit->gettipe()->singkatan);
    }
}
