<?php

namespace App\Controllers;

use App\Entities\SuratEntity;
use App\Libraries\ModelLoader;
use CodeIgniter\I18n\Time;

class Surat extends BaseController
{
    protected $model;
    protected $unitkerjaModel;
    protected $usersModel;

    public function __construct()
    {
        $this->model = ModelLoader::fetch('SuratModel');
        $this->unitkerjaModel = ModelLoader::fetch('UnitkerjaModel');
        $this->usersModel = ModelLoader::fetch('UsersModel');
    }

    public function formsuratbaru()
    {
        $data = [
            'unitkerja' => $this->unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
        ];
        return view('surat/view_form_surat_baru', $data);
    }

    public function suratmasuk()
    {
        $data = [
            'title'     => 'Surat Masuk',
            'tipe'      => 1,
            'surat'     => $this->model->where('status', 1)->findAll(),
            'unitkerja' => $this->unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
            'pemeriksa' => $this->usersModel->where('level', 4)->findAll()
        ];
        return view('surat/view_surat', $data);
    }

    public function suratrevisi()
    {
        $data = [
            'title'     => 'Surat Revisi',
            'tipe'      => 2,
            'surat'     => $this->model->where('status', 2)->findAll(),
            'unitkerja' => $this->unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
            'pemeriksa' => $this->usersModel->where('level', 4)->findAll()
        ];
        return view('surat/view_surat', $data);
    }

    public function suratkeluar()
    {
        $data = [
            'title'     => 'Surat Keluar',
            'tipe'      => 3,
            'surat'     => $this->model->where('status', 3)->findAll(),
            'unitkerja' => $this->unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
            'pemeriksa' => $this->usersModel->where('level', 4)->findAll()
        ];
        return view('surat/view_surat', $data);
    }

    public function suratdetail($id)
    {
        $data = [
            'title' => 'Surat Detail',
            'surat'     => $this->model->find($id),
        ];
        return view('surat/view_surat_detail', $data);
    }

    public function simpansuratbaru()
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $suratEntity = new SuratEntity($post);
            $suratEntity->setNoAgenda($post['no-agenda1'], $post['no-agenda2']);
            $this->model->save($suratEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
        return redirect()->to(base_url('surat/formsuratbaru'));
    }

    public function update($id)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $suratEntity = new SuratEntity($post);
            $this->model->update($id, $suratEntity);
            echo json_encode($suratEntity->pemeriksa->inisial);
        }
    }

    public function coba()
    {

        echo Time::yesterday();
        // $surat = $this->model->where('status', 1)->findAll();
        // foreach ($surat as $s) {
        //     dd($s->pemeriksa);
        // }
        // dd($this->model->where('status', 1)->findAll());
        // $no = "123/PRC/IX/2022";
        // $data = explode("/", $no);
        // dd($data);
    }
}
