<?php

namespace App\Controllers;

use App\Entities\SuratEntity;
use App\Models\SuratModel;

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
        return view('surat/view_form_surat_baru');
    }

    public function suratmasuk()
    {
        $data = [
            'title'  => 'Surat Masuk',
            'tipe'   => 1,
            'surat'  => $this->model->findAll()
        ];
        return view('surat/view_surat', $data);
    }

    public function suratrevisi()
    {
        $data = [
            'title'  => 'Surat Revisi',
            'tipe'   => 2
        ];
        return view('surat/view_surat', $data);
    }

    public function suratkeluar()
    {
        $data = [
            'title'  => 'Surat Keluar',
            'tipe'   => 3
        ];
        return view('surat/view_surat', $data);
    }

    public function suratdetail()
    {
        $data = [
            'title' => 'Surat Detail'
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
        $no = "123/PRC/IX/2022";
        $data = explode("/", $no);
        dd($data);
    }
}
