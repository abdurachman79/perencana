<?php

namespace App\Models;

use CodeIgniter\Model;

class SuratModel extends Model
{
	protected $table                = 'tbl_surat';
	protected $useTimestamps        = true;
	protected $allowedFields        = [
		'no_agenda',
		'tgl_agenda',
		'no_memo_usulan',
		'tgl_memo_usulan',
		'no_memo_pengesahan',
		'tgl_memo_pengesahan',
		'jenis_memo_usulan',
		'perihal',
		'bidang',
		'unitkerja_pengusul',
		'nilai_usulan',
		'nilai_pengesahan',
		'selisih',
		'pemeriksa',
		'status',
		'revisi',
		'selesai',
		'durasi',
		'created_by',
		'updated_by'
	];
}
