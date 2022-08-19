<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tblsuratmasuk extends Migration
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
			'no_agenda' => [
				'type'       => 'VARCHAR',
				'constraint' => '24'
			],
			'tgl_agenda' => [
				'type' => 'DATE'
			],
			'no_memo' => [
				'type'       => 'VARCHAR',
				'constraint' => '24'
			],
			'tgl_memo' => [
				'type' => 'DATE'
			],
			'jenis' => [
				'type'           => 'INT',
				'constraint'     => 3
			],
			'perihal' => [
				'type'       => 'VARCHAR',
				'constraint' => '255'
			],
			'bidang' => [
				'type'           => 'INT',
				'constraint'     => 3
			],
			'unitkerja' => [
				'type'           => 'INT',
				'constraint'     => 3
			],
			'nilai'  => [
				'type'       => 'BIGINT',
				'constraint' => 20,
				'null'       => TRUE
			],
			'pemeriksa' => [
				'type'           => 'INT',
				'constraint'     => 3,
			],
			'status' => [
				'type'           => 'INT',
				'constraint'     => 3,
			],
			'ada_revisi' => [
				'type'           => 'INT',
				'constraint'     => 3,
				'null'           => TRUE
			],
			'created_by' => [
				'type'           => 'INT',
				'constraint'     => 3,
			],
			'updated_by' => [
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
		$this->forge->createTable('tbl_surat_masuk');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_surat_masuk');
	}
}
