<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdutosPedidos extends Model
{
    protected $table = 'produtos_pedidos';
    protected $primaryKey = 'produtos_pedidos_id';

    protected $allowedFields = [
        'produtos_pedidos_pedidos_id',
        'produtos_pedidos_produtos_id',
        'produtos_pedidos_quantidade',
    ];
    
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
    protected $returnType = 'object';
}
