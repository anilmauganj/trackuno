<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSalesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'  =>  [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true
                
            ],

            'product_id' => [
                'type'  => 'INT',
                'constraint' => 11,
            ],

            'quantity' =>  [
                'type'  => 'INT',
                'constraint' => 11
            ],

            'total_amount' => [
                'type'  => 'DECIMAL',
                'constraint' => '10,2',
                
            ],

            'sale_date' => [
                'type'  => 'DATETIME'
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        
        $this->forge->createTable('sales');
    }

    public function down()
    {
        $this->forge->dropTable('sales');
    }
}