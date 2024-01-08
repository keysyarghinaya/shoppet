<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class FoodTable extends Migration
{
    private $table = 'food';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'harga' => [
                'type' => 'int',
                'unsigned' => true,
                'constraint' => 225,
            ],
            'stock' => [
                'type' => 'int',
                'unsigned' => true,
                'constraint' => 225,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
