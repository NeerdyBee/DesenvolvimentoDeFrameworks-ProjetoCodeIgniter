<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'produtos_id'            => 1,
                'produtos_nome'          => 'Pizza Calabresa',
                'produtos_descricao'     => 'Pizza Calabresa',
                'produtos_preco_custo'   => 35.00,
                'produtos_preco_venda'   => 60.00,
                'produtos_categorias_id' => 2,
                'created_at'             => '2025-04-23 16:37:43',
                'updated_at'             => null,
                'deleted_at'             => null,
            ],
            [
                'produtos_id'            => 2,
                'produtos_nome'          => 'X-Tudo',
                'produtos_descricao'     => 'X-Tudo',
                'produtos_preco_custo'   => 15.50,
                'produtos_preco_venda'   => 24.99,
                'produtos_categorias_id' => 1,
                'created_at'             => '2025-04-23 16:37:43',
                'updated_at'             => null,
                'deleted_at'             => null,
            ],
        ];

        $this->db->table('produtos')->insertBatch($data);
    }
}
