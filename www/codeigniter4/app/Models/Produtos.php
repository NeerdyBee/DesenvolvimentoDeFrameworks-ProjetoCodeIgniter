<?php

namespace App\Models;

use CodeIgniter\Model;

class Produtos extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'produtos';
    protected $primaryKey       = 'produtos_id';
    protected $useAutoIncrement = true;    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['produtos_nome',
                                   'produtos_descricao',
                                   'produtos_preco_custo',
                                   'produtos_preco_venda',
                                   'produtos_categorias_id'
                                    ];    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
