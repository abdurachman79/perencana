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
            'title'  => 'Surat Masuk'
        ];
        return view('surat/view_surat_masuk', $data);
    }

    public function suratrevisi()
    {
        $data = [
            'title'  => 'Surat Revisi'
        ];
        return view('surat/view_surat_masuk', $data);
    }

    public function suratkeluar()
    {
        $data = [
            'title'  => 'Surat Keluar'
        ];
        return view('surat/view_surat_keluar', $data);
    }
}
