<?php

namespace App\Models;

use App\Entities\BidangEntity;
use CodeIgniter\Model;

class BidangModel extends Model
{
    protected $table                = 'tbl_bidang';
    protected $useTimestamps        = true;
    protected $returnType           = BidangEntity::class;
    protected $allowedFields        = [
        'nama',
        'kode',
    ];
}
