<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRepairTransactionsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => true,
            ],
            'product_id' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'repair_description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'repair_cost' => [
                'type' => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'repair_date' => [
                'type' => 'DATETIME',
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('product_id', 'products', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('repair_transactions');
    }

    public function down()
    {
        $this->forge->dropTable('repair_transactions');
    }
}