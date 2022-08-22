<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbluser extends Migration
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
			'nama' => [
				'type'       => 'VARCHAR',
				'constraint' => '64'
			],
			'username' => [
				'type'       => 'VARCHAR',
				'constraint' => '64'
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'inisial' => [
				'type'           => 'VARCHAR',
				'constraint'     => '8'
			],
			'role' => [
				'type'           => 'INT',
				'constraint'     => 3
			],
			'is_aktif' => [
				'type'           => 'INT',
				'constraint'     => 3
			],
			'created_at' => [
				'type'           => 'DATETIME'
			],
			'updated_at' => [
				'type'           => 'DATETIME'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_users');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_users');
	}
}
