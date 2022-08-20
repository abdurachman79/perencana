<?php

namespace App\Controllers;

use App\Entities\TipeUnitkerjaEntity;
use App\Models\TipeUnitkerjaModel;

class Unitkerja extends BaseController
{
    // protected $model;
    protected $tipeModel;

    public function __construct()
    {
        $this->tipeModel = new TipeUnitkerjaModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Unit Kerja'
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

    public function simpantipe()
    {
        $tipeEntity = new TipeUnitkerjaEntity();
        $tipeEntity->nama = "divisi";
        $tipeEntity->singkatan = "div";
        $this->tipeModel->save($tipeEntity);
        // dd($tipeEntity);
    }
}
