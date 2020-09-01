<?php namespace App\Database\Seeds;

class Seeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $this->call('ProvinsiSeeder');
                $this->call('WitelSeeder');
        }
}