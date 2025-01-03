<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToRepairTransactions extends Migration
{
    public function up()
    {
        $this->forge->addColumn('repair_transactions', [
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('repair_transactions', ['created_at', 'updated_at']);
    }
}