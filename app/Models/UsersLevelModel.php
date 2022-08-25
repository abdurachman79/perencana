<?php

namespace App\Models;

use App\Entities\UsersLevelEntity;
use CodeIgniter\Model;

class UsersLevelModel extends Model
{
    protected $table                = 'tbl_users_level';
    protected $useTimestamps        = true;
    protected $returnType           = UsersLevelEntity::class;
    protected $allowedFields        = [
        'level',
        'nama',
        'keterangan',
    ];
}
