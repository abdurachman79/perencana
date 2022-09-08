<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UnitkerjaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'			=> 'umum',
				'kode'			=> 'umm',
				'tipe'			=> 1,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'pengolahan air minum',
				'kode'			=> 'pam',
				'tipe'			=> 1,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'peralatan teknik',
				'kode'			=> 'plt',
				'tipe'			=> 1,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'medan kota',
				'kode'			=> 'mkt',
				'tipe'			=> 2,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'sunggal',
				'kode'			=> 'sgl',
				'tipe'			=> 2,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'padang bulan',
				'kode'			=> 'pdb',
				'tipe'			=> 2,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'sunggal',
				'kode'			=> 'isg',
				'tipe'			=> 3,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'delitua',
				'kode'			=> 'idt',
				'tipe'			=> 3,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'limau manis',
				'kode'			=> 'ilm',
				'tipe'			=> 3,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'cemara',
				'kode'			=> 'ilc',
				'tipe'			=> 4,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'laboratorium',
				'kode'			=> 'lab',
				'tipe'			=> 5,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'bengkel',
				'kode'			=> 'bkl',
				'tipe'			=> 5,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'satuan pengamanan',
				'kode'			=> 'stp',
				'tipe'			=> 5,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
		];

		// Using Query Builder
		$this->db->table('tbl_unitkerja')->insertBatch($data);
	}
}
