<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'usuarios_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['usuarios_nome',
                                   'usuarios_sobrenome',
                                   'usuarios_email',
                                   'usuarios_cpf',
                                   'usuarios_data_nasc',
                                   'usuarios_nivel',
                                   'usuarios_fone',
                                   'usuarios_senha'
                                    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
