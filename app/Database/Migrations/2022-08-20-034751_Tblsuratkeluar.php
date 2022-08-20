<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblsuratkeluar extends Migration
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
			'surat_id' => [
				'type'           => 'INT',
				'constraint'     => 8,
			],
			'no_pengesahan' => [
				'type'       => 'VARCHAR',
				'constraint' => '24'
			],
			'tgl_pengesahan' => [
				'type' => 'DATE'
			],
			'nilai_pengesahan'  => [
				'type'       => 'BIGINT',
				'constraint' => 20,
				'null'       => TRUE
			],
			'selisih' => [
				'type'       => 'BIGINT',
				'constraint' => 20,
				'null'       => TRUE
			],
			'durasi' => [
				'type'           => 'INT',
				'constraint'     => 3,
			],
			'created_at' => [
				'type'           => 'DATETIME'
			],
			'updated_at' => [
				'type'           => 'DATETIME'
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('tbl_surat_keluar');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_surat_keluar');
	}
}
