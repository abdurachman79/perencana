<?php

namespace App\Entities;

use CodeIgniter\Entity;

class UnitkerjaEntity extends Entity
{
	protected $datamap = [
		'nama-unitkerja' => 'nama',
		'tipe-id'        => 'tipe'
	];

	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];

	protected $casts   = [];
}
