<?php

namespace App\Controllers;

use App\Models\Funcionarios as Funcionarios_model;
use App\Models\Usuarios as Usuarios_model;

class Funcionarios extends BaseController
{
    private $funcionarios;
    private $usuarios;

    public function __construct()
    {
        $this->funcionarios = new Funcionarios_model();
        $this->usuarios = new Usuarios_model();
        helper('functions');
    }

    public function index(): string
    {
        $data['title'] = 'Funcionários';
        $data['funcionarios'] = $this->funcionarios
            ->select('funcionarios.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'funcionarios.funcionarios_usuarios_id = usuarios.usuarios_id')
            ->findAll();

        return view('funcionarios/index', $data);
    }

    public function new(): string
    {
        $data = [
            'title' => 'Novo Funcionário',
            'op' => 'create',
            'form' => 'Cadastrar',
            'usuarios' => $this->usuarios->findAll(),
            'funcionarios' => (object) [
                'funcionarios_id' => '',
                'funcionarios_cargo' => '',
                'funcionarios_salario' => '',
                'funcionarios_usuarios_id' => ''
            ]
        ];

        return view('funcionarios/form', $data);
    }

    public function create()
    {
        $this->funcionarios->save([
            'funcionarios_usuarios_id' => $_REQUEST['funcionarios_usuarios_id'],
            'funcionarios_cargo' => $_REQUEST['funcionarios_cargo'],
            'funcionarios_salario' => $_REQUEST['funcionarios_salario']
        ]);

        $usuarios_id = $_REQUEST['funcionarios_usuarios_id'];
        if ($usuarios_id) {
            $this->usuarios->update($usuarios_id, [
                'usuarios_nivel' => 1,
            ]);
        }

        return redirect()->to('/funcionarios')->with('msg', msg('Funcionário cadastrado com sucesso!', 'success'));
    }

    public function delete($id)
    {
        $this->funcionarios->delete($id);
        return redirect()->to('/funcionarios')->with('msg', msg('Funcionário deletado com sucesso!', 'success'));
    }

    public function edit($id)
    {
        $data = [
            'funcionarios' => $this->funcionarios->find($id),
            'usuarios' => $this->usuarios->findAll(),
            'title' => 'Editar Funcionário',
            'form' => 'Editar',
            'op' => 'update',
        ];

        return view('funcionarios/form', $data);
    }

    public function update()
    {
        $this->funcionarios->update($_REQUEST['funcionarios_id'], [
            'funcionarios_usuarios_id' => $_REQUEST['funcionarios_usuarios_id'],
            'funcionarios_cargo' => $_REQUEST['funcionarios_cargo'],
            'funcionarios_salario' => $_REQUEST['funcionarios_salario']
        ]);

        return redirect()->to('/funcionarios')->with('msg', msg('Funcionário atualizado com sucesso!', 'success'));
    }

    public function search()
    {
        $pesquisar = $_REQUEST['pesquisar'];
        $data['funcionarios'] = $this->funcionarios
            ->select('funcionarios.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'funcionarios.funcionarios_usuarios_id = usuarios.usuarios_id')
            ->like('funcionarios_cargo', $pesquisar)
            ->orLike('usuarios.usuarios_nome', $pesquisar)
            ->findAll();
        $data['title'] = 'Funcionários';
        $data['msg'] = msg("Resultados encontrados: " . count($data['funcionarios']), 'info');

        return view('funcionarios/index', $data);
    }
}