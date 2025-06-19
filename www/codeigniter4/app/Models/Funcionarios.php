<?php

namespace App\Models;

use CodeIgniter\Model;

class Funcionarios extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'funcionarios';
    protected $primaryKey = 'funcionarios_id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'funcionarios_usuarios_id',
        'funcionarios_cargo',
        'funcionarios_salario'
    ];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';
    protected $returnType = 'object';
}