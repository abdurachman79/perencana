<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class BidangSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'			=> 'perencanaan teknik',
				'kode'			=> 'pt',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now(),
			],
			[
				'nama'			=> 'gambar teknik',
				'kode'			=> 'gt',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now(),
			],
			[
				'nama'			=> 'pengawasan teknik',
				'kode'			=> 'pws',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now(),
			],
		];

		// Using Query Builder
		$this->db->table('tbl_bidang')->insertBatch($data);
	}
}
