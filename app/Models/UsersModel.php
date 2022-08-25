<?php

namespace App\Models;

use App\Entities\UsersEntity;
use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table                = 'tbl_users';
    protected $useTimestamps        = true;
    protected $returnType           = UsersEntity::class;
    protected $allowedFields        = [
        'nama',
        'username',
        'password',
        'inisial',
        'bidang',
        'level',
        'is_aktif'
    ];
}
