<?php

namespace App\Models;

use App\Entities\RoleEntity;
use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table                = 'tbl_role';
    protected $useTimestamps        = true;
    protected $returnType           = RoleEntity::class;
    protected $allowedFields        = [
        'nama',
        'keterangan',
    ];
}
