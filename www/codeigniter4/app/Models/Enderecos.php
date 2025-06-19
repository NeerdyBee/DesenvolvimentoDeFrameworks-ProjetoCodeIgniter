<?php

namespace App\Models;

use CodeIgniter\Model;

class Enderecos extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'enderecos';
    protected $primaryKey       = 'enderecos_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['enderecos_rua', 'enderecos_numero', 'enderecos_complemento', 'enderecos_cep', 'enderecos_status', 'enderecos_usuarios_id', 'enderecos_cidades_id'];

    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
