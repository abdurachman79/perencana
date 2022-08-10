<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TblSurat extends Migration
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
			'no_memo_usulan' => [
				'type'       => 'VARCHAR',
				'constraint' => '24'
			],
			'tgl_memo_usulan' => [
				'type' => 'DATE'
			],
			'no_memo_pengesahan' => [
				'type'       => 'VARCHAR',
				'constraint' => '24',
				'null'       => TRUE
			],
			'tgl_memo_pengesahan' => [
				'type' => 'DATE',
				'null' => TRUE
			],
			'jenis_memo_usulan' => [
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
			'unitkerja_pengusul' => [
				'type'           => 'INT',
				'constraint'     => 3
			],
			'nilai_usulan'  => [
				'type'       => 'BIGINT',
				'constraint' => 20,
				'null'       => TRUE
			],
			'nilai_pengesahan'  => [
				'type'       => 'BIGINT',
				'constraint' => 20,
				'null'       => TRUE
			],
			'selisih'  => [
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
			'revisi' => [
				'type'           => 'INT',
				'constraint'     => 3,
				'null'           => TRUE
			],
			'selesai' => [
				'type'           => 'INT',
				'constraint'     => 3,
				'null'           => TRUE
			],
			'durasi' => [
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
		$this->forge->createTable('tbl_surat');
	}

	public function down()
	{
		$this->forge->dropTable('tbl_surat');
	}
}
