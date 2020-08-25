<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class WitelMigration extends Migration
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
			'witel'			=> [
				'type'			=> 'VARCHAR',
				'constraint'	=> 255
			
			],
			'kode_witel'		=> [
				'type'			=> 'INT',
				'constraint'	=> 11
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('witel');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('witel', TRUE);
	}
}
