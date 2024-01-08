<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MedicineTableSeeder extends Seeder
{
    private $table ='medicine';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama' =>'vitamin minyak ikan 15g',
                'harga' => 20000,
                'stock' => 10,
            ],
            [
                'id' => 2,
                'nama' =>'obat tetes cacing 15ml',
                'harga' => 40000,
                'stock' => 10,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
