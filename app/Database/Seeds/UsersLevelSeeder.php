<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersLevelSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'level'			=> 1,
				'nama'			=> 'kadiv',
				'keterangan'	=> '',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'level'			=> 2,
				'nama'			=> 'admin',
				'keterangan'	=> '',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'level'			=> 3,
				'nama'			=> 'kabid',
				'keterangan'	=> '',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'level'			=> 4,
				'nama'			=> 'pemeriksa',
				'keterangan'	=> '',
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
		];

		// Using Query Builder
		$this->db->table('tbl_users_level')->insertBatch($data);
	}
}
