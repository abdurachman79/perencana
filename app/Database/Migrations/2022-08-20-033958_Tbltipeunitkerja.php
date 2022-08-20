<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tbltipeunitkerja extends Migration
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
			'singkatan' => [
				'type'       => 'VARCHAR',
				'constraint' => '8'
			],
			'created_at' => [
				'type'           => 'DATETIME'
			],
			'updated_at' => [
				'type'           => 'DATETIME'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_tipe_unitkerja');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_tipe_unitkerja');
	}
}
