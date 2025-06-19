<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'usuarios_id'         => 1,
                'usuarios_nome'       => 'Vilson',
                'usuarios_sobrenome'  => 'Soares de Siqueira',
                'usuarios_email'      => 'vilsonsoares@gmail.com',
                'usuarios_cpf'        => '999.999.999-99',
                'usuarios_data_nasc'  => '1981-12-03',
                'usuarios_nivel'      => 1,
                'usuarios_fone'       => '6398474-3380',
                'usuarios_senha'      => 'e10adc3949ba59abbe56e057f20f883e', // (123456)
                'created_at'          => '2025-04-23 16:37:43',
                'updated_at'          => null,
                'deleted_at'          => null,
            ],
            [
                'usuarios_id'         => 2,
                'usuarios_nome'       => 'Luis',
                'usuarios_sobrenome'  => 'Carrijo',
                'usuarios_email'      => 'luis@gmail.com',
                'usuarios_cpf'        => '000.999.999-99',
                'usuarios_data_nasc'  => '2003-12-24',
                'usuarios_nivel'      => 1,
                'usuarios_fone'       => '6291234-1234',
                'usuarios_senha'      => 'e10adc3949ba59abbe56e057f20f883e',
                'created_at'          => '2025-04-23 16:37:43',
                'updated_at'          => null,
                'deleted_at'          => null,
            ],
            [
                'usuarios_id'         => 3,
                'usuarios_nome'       => 'Ramiro',
                'usuarios_sobrenome'  => 'Vieira',
                'usuarios_email'      => 'ramiro@gmail.com',
                'usuarios_cpf'        => '999.000.999-99',
                'usuarios_data_nasc'  => '2001-07-10',
                'usuarios_nivel'      => 1,
                'usuarios_fone'       => '6294321-1234',
                'usuarios_senha'      => 'e10adc3949ba59abbe56e057f20f883e',
                'created_at'          => '2025-04-23 16:37:43',
                'updated_at'          => null,
                'deleted_at'          => null,
            ],
        ];

        $this->db->table('usuarios')->insertBatch($data);
    }
}
