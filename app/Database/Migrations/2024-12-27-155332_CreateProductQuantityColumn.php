<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductQuantityColumn extends Migration
{
    public function up()
    {
       $this->forge->addColumn('products', [
          'quantity' =>  [
              'type' =>  'INT',
              'constraint' => 11,
              'default' => 0,
              'after'  => 'price'
          ],
       ]);
    }

    public function down()
    {
        $this->forge->dropColumn('products', 'quantity');
    }
}