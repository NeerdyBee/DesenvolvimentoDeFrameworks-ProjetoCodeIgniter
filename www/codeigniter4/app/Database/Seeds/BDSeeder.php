<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BDSeeder extends Seeder
{
    public function run()
    {
        $this->call('CategoriasSeeder');
        $this->call('CidadesSeeder');
        $this->call('ProdutosSeeder');
        $this->call('UsuariosSeeder');
        $this->call('ImgProdutosSeeder');
    }
}
