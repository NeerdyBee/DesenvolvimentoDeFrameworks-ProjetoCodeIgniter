<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'categorias_id'   => 1,
                'categorias_nome' => 'Sanduíches2',
                'created_at'      => '2025-04-23 16:37:43',
                'updated_at'      => null,
                'deleted_at'      => null,
            ],
            [
                'categorias_id'   => 2,
                'categorias_nome' => 'Pizzas',
                'created_at'      => '2025-04-23 16:37:43',
                'updated_at'      => null,
                'deleted_at'      => null,
            ],
        ];

        $this->db->table('categorias')->insertBatch($data);
    }
}
