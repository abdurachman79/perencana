<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class TipeUnitkerjaSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'			=> 'divisi',
				'singkatan'		=> 'divisi',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'cabang',
				'singkatan'		=> 'cabang',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'instalasi pengolahan air minum',
				'singkatan'		=> 'ipam',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'instalasi pengolahan air limbah',
				'singkatan'		=> 'ipal',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'unit',
				'singkatan'		=> 'unit',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			]
		];

		// Using Query Builder
		$this->db->table('tbl_tipe_unitkerja')->insertBatch($data);
	}
}
