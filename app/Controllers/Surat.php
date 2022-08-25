<?php

namespace App\Controllers;

use App\Entities\SuratEntity;
use App\Libraries\ModelLoader;
use App\Models\SuratModel;
use App\Models\UnitkerjaModel;

class Surat extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = ModelLoader::fetch('SuratModel');
        $this->unitkerjaModel = ModelLoader::fetch('UnitkerjaModel');
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

    public function simpansuratbaru($post)
    {
        if ($this->request->getMethod() == "post") {
            $post = $this->request->getPost();
            $suratEntity = new SuratEntity($post);
            $suratEntity->setNoAgenda($post['no-agenda1'], $post['no-agenda2']);
            $this->model->save($suratEntity);
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        }
    }

    public function coba()
    {
        // $no = "123/PRC/IX/2022";
        // $data = explode("/", $no);
        // dd($data);
    }
}
