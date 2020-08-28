<?php 

namespace App\Database\Seeds;

class TregSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            'treg'         => 1,
            'kode_treg'    => 1
        ];

        $this->db->table('treg')->insert($data);

        $data = [
            'treg'         => 2,
            'kode_treg'    => 2
        ];

        $this->db->table('treg')->insert($data);

        $data = [
            'treg'         => 3,
            'kode_treg'    => 3
        ];

        $this->db->table('treg')->insert($data);

        $data = [
            'treg'         => 4,
            'kode_treg'    => 4
        ];

        $this->db->table('treg')->insert($data);

        $data = [
            'treg'         => 5,
            'kode_treg'    => 5
        ];

        $this->db->table('treg')->insert($data);

        $data = [
            'treg'         => 6,
            'kode_treg'    => 6
        ];

        $this->db->table('treg')->insert($data);

        $data = [
            'treg'         => 7,
            'kode_treg'    => 7
        ];

        $this->db->table('treg')->insert($data);

    }

}