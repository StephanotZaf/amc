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
				'null'			=> TRUE,
				'constraint'	=> 255
			
			],
			'kode_witel'		=> [
				'type'			=> 'INT',
				'null'			=> TRUE,
				'constraint'	=> 11
			],
			'created_at datetime default current_timestamp',
    		'updated_at datetime default current_timestamp on update current_timestamp'
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
