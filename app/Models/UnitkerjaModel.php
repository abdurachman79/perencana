<?php

namespace App\Models;

use App\Entities\UnitkerjaEntity;
use CodeIgniter\Model;

class UnitkerjaModel extends Model
{
    protected $table                = 'tbl_unitkerja';
    protected $useTimestamps        = true;
    protected $returnType           = UnitkerjaEntity::class;
    protected $allowedFields        = [
        'nama',
        'kode',
        'tipe'
    ];
}
