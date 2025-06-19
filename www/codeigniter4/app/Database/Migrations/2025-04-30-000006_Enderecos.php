<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Enderecos extends Migration
{
    public function up(){
        $this->forge->addField([
            'enderecos_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'enderecos_rua' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'enderecos_numero' => [
                'type' => 'INT',
                'constraint' => 50,
                'null' => true,
            ],
            'enderecos_complemento' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'enderecos_status' => [
                'type'       => 'INT',
                'constraint' => 1,
            ],
            'enderecos_cidades_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'enderecos_usuarios_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'created_at' => ['type' => 'DATETIME', 'null' => true],
            'updated_at' => ['type' => 'DATETIME', 'null' => true],
            'deleted_at' => ['type' => 'DATETIME', 'null' => true],
        ]);

        $this->forge->addKey('enderecos_id', true);
        $this->forge->addForeignKey(
            'enderecos_cidades_id',
            'cidades',
            'cidades_id',
            'CASCADE',  // ON UPDATE
            'RESTRICT'  // ON DELETE
        );
        $this->forge->addForeignKey(
            'enderecos_usuarios_id',
            'usuarios',
            'usuarios_id',
            'CASCADE',  // ON UPDATE
            'RESTRICT'  // ON DELETE
        );

        $this->forge->createTable('enderecos');
    }

    public function down()
    {
        $this->forge->dropTable('enderecos');
    }
}