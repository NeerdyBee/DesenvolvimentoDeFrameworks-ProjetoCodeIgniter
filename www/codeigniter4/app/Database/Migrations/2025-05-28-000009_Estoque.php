<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Estoques extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "estoques_id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true,
                ],
            'estoques_quantidade' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            "estoques_produtos_id" => [
                "type"=> "INT",
                "constraint" => 11,
                "unsigned" => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            ]);
            $this->forge->addKey('estoques_id', true);
            $this->forge->addForeignKey('estoques_produtos_id', 'produtos', 'produtos_id', 'CASCADE', 'CASCADE');
            $this->forge->createTable('estoques');
    }

    public function down()
    {
        $this->forge->dropTable('estoques');
    }
}