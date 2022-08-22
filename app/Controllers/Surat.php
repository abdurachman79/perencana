<?php

namespace App\Controllers;

use App\Entities\SuratEntity;
use App\Models\SuratModel;
use App\Models\UnitkerjaModel;

class Surat extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new SuratModel();
    }

    public function formsuratbaru()
    {
        if ($this->request->getMethod() == "post") {
            $this->simpansuratbaru($this->request->getPost());
            // dd($this->request->getPost());
        }
        $unitkerjaModel = new UnitkerjaModel();
        $data = [
            'unitkerja' => $unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
        ];
        return view('surat/view_form_surat_baru', $data);
    }

    public function suratmasuk()
    {
        $unitkerjaModel = new UnitkerjaModel();
        $data = [
            'title'     => 'Surat Masuk',
            'tipe'      => 1,
            'surat'     => $this->model->where('status', 1)->findAll(),
            'unitkerja' => $unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
        ];
        return view('surat/view_surat', $data);
    }

    public function suratrevisi()
    {
        $unitkerjaModel = new UnitkerjaModel();
        $data = [
            'title'     => 'Surat Revisi',
            'tipe'      => 2,
            'surat'     => $this->model->where('status', 2)->findAll(),
            'unitkerja' => $unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
        ];
        return view('surat/view_surat', $data);
    }

    public function suratkeluar()
    {
        $unitkerjaModel = new UnitkerjaModel();
        $data = [
            'title'     => 'Surat Keluar',
            'tipe'      => 3,
            'surat'     => $this->model->where('status', 3)->findAll(),
            'unitkerja' => $unitkerjaModel->orderBy('tipe', 'asc')->findAll(),
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

    private function simpansuratbaru($post)
    {
        $surat = new SuratEntity();
        $surat->fill($post);
        $surat->setNoAgenda($post['no-agenda1'], $post['no-agenda2']);
        $this->model->save($surat);
        session()->setFlashdata('flashdata', 'Data berhasil disimpan');
    }

    public function coba()
    {
        // $no = "123/PRC/IX/2022";
        // $data = explode("/", $no);
        // dd($data);
        echo strstr("White Tank Top", " ");
    }
}
