<?php namespace App\Database\Seeds;

class MasterSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $db = \Config\Database::connect();
                
                $builder = $db->table('treg');
                $builder->emptyTable('treg');
                $this->call('TregSeeder');

                $builder = $db->table('witel');
                $builder->emptyTable('witel');
                $this->call('WitelSeeder');

                $builder = $db->table('provinsi');
                $builder->emptyTable('provinsi');
                $this->call('ProvinsiSeeder');
        }
}