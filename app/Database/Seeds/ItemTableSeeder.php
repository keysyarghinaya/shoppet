<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    private $table ='item';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama' =>'mainan bulu',
                'harga' => 15000,
                'stock' => 25,
            ],
            [
                'id' => 2,
                'nama' =>'boneka ikan',
                'harga' => 10000,
                'stock' => 15,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
