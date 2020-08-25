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
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'kode_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'area_regional'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'kode_provinsi'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'kode_witel'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'nama_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'luas'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'alamat_lokasi'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'provinsi'			=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'kota'				=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'kecamatan'			=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'desa'				=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'latitude'			=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'longitude'			=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'peruntukan'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'created_at datetime default current_timestamp',
    		'updated_at datetime default current_timestamp on update current_timestamp'
			


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
