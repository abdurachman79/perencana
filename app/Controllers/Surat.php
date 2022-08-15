<?php

namespace App\Controllers;

use App\Entities\SuratEntity;
use App\Models\SuratModel;
use CodeIgniter\I18n\Time;

class Surat extends BaseController
{
    public function formsuratbaru()
    {
        if ($this->request->getPost()) {
            session()->setFlashdata('flashdata', 'Data berhasil disimpan');
            dd($this->request->getPost());
        }
        return view('surat/view_form_surat_baru');
    }

    public function suratmasuk()
    {
        $data = [
            'title'  => 'Surat Masuk',
            'tipe'   => 1
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

    public function simpansuratbaru()
    {
        // session()->setFlashdata('flashdata', 'Data berhasil disimpan');
        // $model = new SuratModel();
        // $data = $this->request->getPost();
        // $surat = new SuratEntity();
        // $surat->fill($data);
        // $model->save($surat);
        // dd($data);
    }

    public function coba()
    {
    }
}
