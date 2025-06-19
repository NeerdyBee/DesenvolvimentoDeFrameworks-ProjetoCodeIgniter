<?php

namespace App\Models;

use CodeIgniter\Model;

class Imgprodutos extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'imgprodutos';
    protected $primaryKey       = 'imgprodutos_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['imgprodutos_link','imgprodutos_descricao','imgprodutos_produtos_id'];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
