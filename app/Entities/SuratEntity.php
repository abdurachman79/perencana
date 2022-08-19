<?php

namespace App\Entities;

use CodeIgniter\Entity;

class SuratEntity extends Entity
{
	protected $datamap = [
		'no-agenda'          => 'no_agenda',
		'tgl-agenda'         => 'tgl_agenda',
		'no-memo-usulan'     => 'no_memo_usulan',
		'tgl-memo-usulan'    => 'tgl_memo_usulan',
		'jenis-memo-usulan'  => 'jenis_memo_usulan',
		'unitkerja-pengusul' => 'unitkerja_pengusul'
	];
	protected $dates   = [
		'created_at',
		'updated_at',
		'deleted_at',
	];
	protected $casts   = [];

	public function setNoAgenda($string1, $string2)
	{
		$this->attributes["no-agenda"] = $string1 . $string2;
		return $this;
	}
}
