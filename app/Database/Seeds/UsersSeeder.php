<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UsersSeeder extends Seeder
{
	public function run()
	{
		$data = [
			[
				'nama'			=> 'kadiv',
				'username'		=> 'kadiv',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'kdv',
				'bidang'		=> '1',
				'level'			=> '1',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'admin',
				'username'		=> 'admin',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'adm',
				'bidang'		=> '1',
				'level'			=> '2',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'kabid pt',
				'username'		=> 'kabidpt',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'kpt',
				'bidang'		=> '1',
				'level'			=> '3',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'kabid gt',
				'username'		=> 'kabidgt',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'kgt',
				'bidang'		=> '2',
				'level'			=> '3',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'kabid pws',
				'username'		=> 'kabidpws',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'kpw',
				'bidang'		=> '3',
				'level'			=> '3',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'Upin',
				'username'		=> 'upin',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'up',
				'bidang'		=> '1',
				'level'			=> '4',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'Ipin',
				'username'		=> 'ipin',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'ip',
				'bidang'		=> '1',
				'level'			=> '4',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
			[
				'nama'			=> 'Mail',
				'username'		=> 'mail',
				'password'		=> password_hash('123', PASSWORD_BCRYPT),
				'inisial'		=> 'ma',
				'bidang'		=> '1',
				'level'			=> '4',
				'is_aktif'		=> 0,
				'created_at'	=> Time::now(),
				'updated_at'	=> Time::now()
			],
		];

		// Using Query Builder
		$this->db->table('tbl_users')->insertBatch($data);
	}
}
