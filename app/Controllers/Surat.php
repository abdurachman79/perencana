<?php

namespace App\Controllers;

use App\Entities\SuratEntity;
use App\Models\SuratModel;

class Surat extends BaseController
{
    public function formsuratbaru()
    {
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
        $model = new SuratModel();
        $data = $this->request->getPost();
        $surat = new SuratEntity();
        $surat->fill($data);
        $model->save($surat);
        // $data = [
        //     'no_agenda'          => $this->request->getVar('no-agenda'),
        //     'tgl_agenda'         => $this->request->getVar('tgl-agenda'),
        //     'no_memo_usulan'     => $this->request->getVar('no-memo-usulan'),
        //     'tgl_memo_usulan'    => $this->request->getVar('tgl-memo-usulan'),
        //     'jenis_memo_usulan'  => $this->request->getVar('jenis-memo-usulan'),
        //     'perihal'            => $this->request->getVar('perihal'),
        //     'bidang'             => $this->request->getVar('bidang'),
        //     'unitkerja_pengusul' => $this->request->getVar('unitkerja-pengusul')
        // ];
        dd($surat);
    }
}
