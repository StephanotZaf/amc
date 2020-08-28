<?php namespace App\Database\Seeds;

class MasterSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $this->call('TregSeeder');
                $this->call('WitelSeeder');
        }
}