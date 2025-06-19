<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ImgProdutosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'imgprodutos_id'          => 1,
            'imgprodutos_link'        => 'uploads/20250416/1744801962_9165428592f42702f939.jpg',
            'imgprodutos_descricao'   => 'Pizza1',
            'imgprodutos_produtos_id' => 1,
            'created_at'              => '2025-04-23 16:37:43',
            'updated_at'              => null,
            'deleted_at'              => null,
        ];

        $this->db->table('imgprodutos')->insert($data);
    }
}
