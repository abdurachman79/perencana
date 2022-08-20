<?php

namespace App\Controllers;

class Unitkerja extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Unit Kerja'
        ];
        return view('unitkerja/view_unitkerja', $data);
    }
}
