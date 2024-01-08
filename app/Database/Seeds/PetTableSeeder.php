<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetTableSeeder extends Seeder
{
    private $table ='pet';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'pet' => 'kucing anggora',
                'umur' => '3 bulan',
                'harga' => 2000000,
                'stock' => 5,
            ],
            [
                'id' => 2,
                'pet' => 'kucing ragdoll',
                'umur' => '6 bulan',
                'harga' => 3000000,
                'stock' => 5,
            ],
            [
                'id' => 3,
                'pet' => 'anjing golden retriever',
                'umur' => '4 bulan',
                'harga' => 3500000,
                'stock' => 5,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
