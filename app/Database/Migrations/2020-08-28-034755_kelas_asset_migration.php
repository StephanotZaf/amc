<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class KelasAssetMigration extends Migration
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
			'kelas_aset'		=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			
			],
			'deskripsi'		=> [
				'type'			=> 'TEXT',
				'null'			=> TRUE,
				'constraint'	=> 255
			],
			'created_at datetime default current_timestamp',
    		'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('kelas_aset');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('kelas_aset', TRUE);
	}
}
