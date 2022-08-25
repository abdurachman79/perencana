<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbluserslevel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'level' => [
				'type'           => 'INT',
				'constraint'     => 3,
			],
			'nama' => [
				'type'       => 'VARCHAR',
				'constraint' => '64'
			],
			'keterangan' => [
				'type'       => 'VARCHAR',
				'constraint' => '64'
			],
			'created_at' => [
				'type'           => 'DATETIME'
			],
			'updated_at' => [
				'type'           => 'DATETIME'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_users_level');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_users_level');
	}
}
