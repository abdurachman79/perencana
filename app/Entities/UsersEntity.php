<?php

namespace App\Entities;

use App\Libraries\ModelLoader;
use CodeIgniter\Entity;

class UsersEntity extends Entity
{
	protected $datamap = [];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function getBidang()
	{
		$model = ModelLoader::fetch('BidangModel');
		return $model->find($this->attributes['bidang']);
	}

	public function getLevel()
	{
		$model = ModelLoader::fetch('UsersLevelModel');
		return $model->find($this->attributes['level']);
	}

	public function setPassword(String $password)
	{
		$this->attributes['password'] = password_hash($password, PASSWORD_BCRYPT);
		return $this;
	}
}
