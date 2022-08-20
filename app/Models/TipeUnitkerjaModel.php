<?php

namespace App\Models;

use App\Entities\TipeUnitkerjaEntity;
use CodeIgniter\Model;

class TipeUnitkerjaModel extends Model
{
    protected $table                = 'tbl_tipe_unitkerja';
    protected $useTimestamps        = true;
    protected $returnType           = TipeUnitkerjaEntity::class;
    protected $allowedFields        = [
        'nama',
        'singkatan'
    ];
}
