<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    private $table ='food';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama' => 'excel dry food : tuna 800 gram',
                'harga' => 15000,
                'stock' => 20,
            ],
            [
                'id' => 2,
                'nama' => 'royal canin dry food 1 kg',
                'harga' => 85000,
                'stock' => 10,
            ],
            [
                'id' => 3,
                'nama' => 'whiskas wet food 1-2 month',
                'harga' => 6000,
                'stock' => 30,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
