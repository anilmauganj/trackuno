<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' =>  [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increament' => true
                
            ],

            'name' =>  [
                'type' => 'VARCHAR',
                'constraint' => 255,     
            ],

            'description' => [
                'type' => 'TEXT',
                'null' => true
                
            ],

            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
                'null'      => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}