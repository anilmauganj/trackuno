<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimestampsToProducts extends Migration
{
    public function up()
    {
        $this->forge->addColumn('products', [
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
        $this->forge->dropColumn('products', ['created_at', 'updated_at']);
    }
}