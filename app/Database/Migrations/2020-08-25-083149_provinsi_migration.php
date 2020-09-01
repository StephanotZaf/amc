<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ProvinsiMigration extends Migration
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
			'provinsi'			=> [
				'type'			=> 'VARCHAR',
				'null'			=> TRUE,
				'constraint'	=> 255
			
			],
			'kode_provinsi'		=> [
				'type'			=> 'INT',
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'created_at datetime default current_timestamp',
    		'updated_at datetime default current_timestamp on update current_timestamp'
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('provinsi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('provinsi', TRUE);
	}
}
