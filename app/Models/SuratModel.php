<?php

namespace App\Models;

use App\Entities\SuratEntity;
use CodeIgniter\Model;

class SuratModel extends Model
{
	protected $table                = 'tbl_surat_masuk';
	protected $useTimestamps        = true;
	protected $returnType           = SuratEntity::class;
	protected $allowedFields        = [
		'no_agenda',
		'tgl_agenda',
		'no_memo',
		'tgl_memo',
		'jenis',
		'perihal',
		'bidang',
		'unitkerja',
		'nilai',
		'pemeriksa',
		'status',
		'ada_revisi',
		'created_by',
		'updated_by'
	];
}
