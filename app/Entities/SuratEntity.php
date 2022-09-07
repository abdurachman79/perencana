<?php

namespace App\Entities;

use App\Libraries\ModelLoader;
use CodeIgniter\Entity;

class SuratEntity extends Entity
{
	protected $datamap = [
		'no-agenda'    => 'no_agenda',
		'tgl-agenda'   => 'tgl_agenda',
		'no-memo'      => 'no_memo',
		'tgl-memo'     => 'tgl_memo',
		'ada-revisi'   => 'ada_revisi'
	];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function getAgendaNumber()
	{
		$nomor = explode("/", $this->attributes["no_agenda"]);
		return $nomor[0];
	}

	public function getUnitkerja()
	{
		$model = ModelLoader::fetch('UnitkerjaModel');
		return $model->find($this->attributes['unitkerja']);
	}

	public function getPemeriksa()
	{
		$model = ModelLoader::fetch('UsersModel');
		return $model->find($this->attributes['pemeriksa']);
	}

	public function getJenis()
	{
		$jenis = $this->attributes["jenis"];
		if ($jenis == 1) {
			$jenis = "harga";
		} elseif ($jenis == 2) {
			$jenis = "rab";
		} elseif ($jenis == 3) {
			$jenis = "realisasi";
		} else {
			$jenis = "lain";
		}
		return $jenis;
	}

	public function getNilai()
	{
		return number_format($this->attributes['nilai'], 0, '', ',');
	}

	public function setNoAgenda(String $string1, String $string2)
	{
		$this->attributes["no_agenda"] = $string1 . $string2;
		return $this;
	}
}
