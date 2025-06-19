<?php

namespace App\Controllers;
use App\Models\Clientes as Clientes_model;
use App\Models\Usuarios as Usuarios_model;

class Clientes extends BaseController
{
    private $clientes;
    private $usuarios;
    public function __construct(){
        $this->clientes = new Clientes_model();
        $this->usuarios = new Usuarios_model();
        $data['title'] = 'Clientes';
        helper('functions');
    }
    public function index(): string
    {
        $data['title'] = 'Clientes';
        $data['clientes'] = $this->clientes
            ->select('clientes.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'clientes.clientes_usuarios_id = usuarios.usuarios_id')
            ->findAll();
        return view('clientes/index',$data);
    }

    public function new(): string
    {
        $data['title'] = 'Clientes';
        $data['op'] = 'create';
        $data['form'] = 'cadastrar';
        $data['usuarios'] = $this->usuarios->findAll();
        $data['clientes'] = (object) [
            'clientes_limite'=> '0.00',
            'clientes_usuarios_id'=> '',
            'clientes_id'=> ''
        ];
        return view('clientes/form',$data);
    }
    public function create()
    {
        if (!$this->validate([
            'clientes_usuarios_id' => 'required',
            'clientes_limite' => 'required',
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->clientes->save([
            'clientes_usuarios_id' => $_REQUEST['clientes_usuarios_id'],
            'clientes_limite' => moedaDolar($_REQUEST['clientes_limite']),
        ]);

        $data['msg'] = msg('Cadastrado com Sucesso!','success');
        $data['title'] = 'Clientes';
        $data['clientes'] = $this->clientes
            ->select('clientes.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'clientes.clientes_usuarios_id = usuarios.usuarios_id')
            ->findAll();
        return view('clientes/index',$data);

    }

    public function delete($id)
    {
        $this->clientes->where('clientes_id', (int) $id)->delete();
        $data['msg'] = msg('Deletado com Sucesso!','success');
        $data['title'] = 'Clientes';
        $data['clientes'] = $this->clientes
            ->select('clientes.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'clientes.clientes_usuarios_id = usuarios.usuarios_id')
            ->findAll();
        return view('clientes/index',$data);
    }

    public function edit($id)
    {
        $data['clientes'] = $this->clientes->find(['clientes_id' => (int) $id])[0];
        $data['usuarios'] = $this->usuarios->findAll();
        $data['title'] = 'Clientes';
        $data['form'] = 'Alterar';
        $data['op'] = 'update';
        return view('clientes/form',$data);
    }

    public function update()
    {
        $this->clientes->update($_REQUEST['clientes_id'], [
            'clientes_usuarios_id' => $_REQUEST['clientes_usuarios_id'],
            'clientes_limite' => moedaDolar($_REQUEST['clientes_limite'])
        ]);
        $data['msg'] = msg('Alterado com Sucesso!','success');
        $data['title'] = 'Clientes';
        $data['clientes'] = $this->clientes
            ->select('clientes.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'clientes.clientes_usuarios_id = usuarios.usuarios_id')
            ->findAll();
        return view('clientes/index',$data);
    }

    public function search()
    {
        $pesquisa = $this->request->getPost('pesquisar');
        $data['clientes'] = $this->clientes
            ->select('clientes.*, usuarios.usuarios_nome, usuarios.usuarios_sobrenome, usuarios.usuarios_cpf')
            ->join('usuarios', 'clientes.clientes_usuarios_id = usuarios.usuarios_id')
            ->Like('usuarios.usuarios_nome', $pesquisa)
            ->orLike('usuarios.usuarios_sobrenome', $pesquisa)
            ->findAll();
        $total = count($data['clientes']);
        $data['msg'] = msg("Dados Encontrados: {$total}",'success');
        $data['title'] = 'Clientes';
        return view('clientes/index',$data);
    }


}
