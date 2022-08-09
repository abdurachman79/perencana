<?php

namespace App\Controllers;

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
}
