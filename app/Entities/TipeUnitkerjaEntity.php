<?php

namespace App\Entities;

use CodeIgniter\Entity;

class TipeUnitkerjaEntity extends Entity
{
    protected $datamap = [
        'nama-tipe' => 'nama'
    ];

    protected $dates   = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $casts   = [];

    // public function getNama()
    // {
    //     return strtoupper($this->attributes["nama"]);
    // }

    // public function getSingkatan()
    // {
    //     return strtoupper($this->attributes["singkatan"]);
    // }
}
