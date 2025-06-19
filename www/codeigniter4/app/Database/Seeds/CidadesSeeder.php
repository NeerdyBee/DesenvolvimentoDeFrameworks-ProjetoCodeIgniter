<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CidadesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['cidades_nome' => 'Barro Alto', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Carmo do Rio Verde', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Ceres', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Goianésia', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Guaraíta', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Guarinos', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Hidrolina', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Ipiranga de Goiás', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Itapaci', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Morro Agudo de Goiás', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Nova Glória', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Pilar de Goiás', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Rialma', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Rianápolis', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Rubiataba', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Santa Isabel', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Santa Rita do Novo Destino', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'São Luíz do Norte', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'São Patrício', 'cidades_uf' => 'GO'],
            ['cidades_nome' => 'Uruana', 'cidades_uf' => 'GO'],
        ];

        $this->db->table('cidades')->insertBatch($data);
    }
}
