<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('PetTableSeeder');
        $this->call('FoodTableSeeder');
        $this->call('ItemTableSeeder');
        $this->call('MedicineTableSeeder');
    }
}
