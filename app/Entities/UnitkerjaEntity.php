<?php

namespace App\Entities;

use App\Libraries\ModelLoader;
use CodeIgniter\Entity;
use App\Models\TipeUnitkerjaModel;

class UnitkerjaEntity extends Entity
{

	protected $tipe;

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

	public function getTipe()
	{
		// $model = new TipeUnitkerjaModel();
		$model = ModelLoader::fetch('TipeUnitKerjaModel');
		return $model->find($this->attributes['tipe']);
	}

	public function getNama()
	{
		return $this->getTipe()->singkatan . " " . $this->attributes['nama'];
	}
}
