<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class LahanMigration extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11,
				'unsigned'		=> TRUE,
				'auto_increment'=> TRUE
			],
			'idareal'			=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			],
			'kode_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 11
			],
			'area_regional'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 11
			],
			'kode_provinsi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 11
			],
			'kode_witel'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 11
			],
			'nama_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'luas'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'alamat_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'provinsi'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'kota'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'kecamatan'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'desa'				=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'latitude'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'longitude'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			],
			'peruntukan'		=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			]


		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('lahan');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('lahan');
	}
}
