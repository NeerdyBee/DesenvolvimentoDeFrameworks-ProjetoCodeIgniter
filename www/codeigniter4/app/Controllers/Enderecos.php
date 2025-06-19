<?php

namespace App\Controllers;
use App\Models\Enderecos as Enderecos_model;
use App\Models\Cidades as Cidades_model;
use App\Models\Usuarios as Usuarios_model;

class Enderecos extends BaseController
{
    private $enderecos;
    private $cidades;
    public function __construct(){
        $this->enderecos = new Enderecos_model();
        $this->cidades = new Cidades_model();
        $this->usuarios = new Usuarios_model();

        $data['title'] = 'Enderecos';
        helper('functions');
    }
    public function index(): string
    {
        $data['title'] = 'Enderecos';
        $data['enderecos'] = $this->enderecos->join('cidades', 'enderecos_cidades_id = cidades_id')->find();
        return view('enderecos/index',$data);
    }

    public function new(): string
    {
        $data['title'] = 'Enderecos';
        $data['op'] = 'create';
        $data['form'] = 'cadastrar';
        $data['status'] = [
            ['id' => 0, 'status' => "Principal"],
            ['id' => 1, 'status' => "Secundário"]
        ];
        $data['cidades'] = $this->cidades->findAll();

        $data['enderecos'] = (object) [
            'enderecos_rua'=> '',
            'enderecos_numero'=> '',
            'enderecos_complemento'=> '',
            'enderecos_cep'=> '',
            'enderecos_status'=> '',
            'enderecos_usuarios_id'=> '',
            'enderecos_cidades_id'=> '',
            'enderecos_id'=> ''
        ];
        return view('enderecos/form',$data);
    }
    public function create()
    {

        if(!$this->validate([
            'enderecos_rua' => 'required|max_length[255]|min_length[3]',
            'enderecos_numero' => 'required',
            'enderecos_complemento' => 'required',
            'enderecos_cep' => 'required',
            'enderecos_status' => 'required',
            'enderecos_cidades_id' => 'required'
        ])) {
            
            $data['enderecos'] = (object) [
                'enderecos_id' => '',
                'enderecos_rua' => $_REQUEST['enderecos_rua'],
                'enderecos_numero' => $_REQUEST['enderecos_numero'],
                'enderecos_complemento' => $_REQUEST['enderecos_complemento'],
                'enderecos_cep' => $_REQUEST['enderecos_cep'],
                'enderecos_status' => $_REQUEST['enderecos_status'],
                'enderecos_usuarios_id' => $_REQUEST['enderecos_senha'],
                'enderecos_cidades_id' => $_REQUEST['enderecos_fone']
            ];
            $data['title'] = 'Enderecos';
            $data['form'] = 'Cadastrar';
            $data['op'] = 'create';
            return view('enderecos/form',$data);
        }


        $this->enderecos->save([
            'enderecos_rua' => $_REQUEST['enderecos_rua'],
            'enderecos_numero' => $_REQUEST['enderecos_numero'],
            'enderecos_complemento' => $_REQUEST['enderecos_complemento'],
            'enderecos_cep' => $_REQUEST['enderecos_cep'],
            'enderecos_status' => $_REQUEST['enderecos_status'],
            'enderecos_usuarios_id' => $_REQUEST['enderecos_usuarios_id'],
            'enderecos_cidades_id' => $_REQUEST['enderecos_cidades_id']
        ]);
        
        $data['msg'] = msg('Cadastrado com Sucesso!','success');
        $data['enderecos'] = $this->enderecos->findAll();
        $data['title'] = 'Enderecos';
        return view('enderecos/index',$data);

    }

    public function delete($id)
    {
        $this->enderecos->where('enderecos_id', (int) $id)->delete();
        $data['msg'] = msg('Deletado com Sucesso!','success');
        $data['enderecos'] = $this->enderecos->findAll();
        $data['title'] = 'Enderecos';
        return view('enderecos/index',$data);
    }

    public function edit($id)
    {
        $data['enderecos'] = $this->enderecos->find(['enderecos_id' => (int) $id])[0];
        $data['title'] = 'Enderecos';
        $data['form'] = 'Alterar';
        $data['op'] = 'update';
        $data['status'] = [
            ['id' => 0, 'status' => "Principal"],
            ['id' => 1, 'status' => "Secundário"]
        ];
        $data['cidades'] = $this->cidades->findAll();
        return view('enderecos/form',$data);
    }

    public function update()
    {
        $dataForm = [
            'enderecos_rua' => $_REQUEST['enderecos_rua'],
            'enderecos_numero' => $_REQUEST['enderecos_numero'],
            'enderecos_complemento' => $_REQUEST['enderecos_complemento'],
            'enderecos_cep' => $_REQUEST['enderecos_cep'],
            'enderecos_status' => $_REQUEST['enderecos_status'],
            'enderecos_usuarios_id' => $_REQUEST['enderecos_usuarios_id'],
            'enderecos_cidades_id' => $_REQUEST['enderecos_cidades_id']
        ];

        $this->enderecos->update($_REQUEST['enderecos_id'], $dataForm);
        $data['msg'] = msg('Alterado com Sucesso!','success');
        $data['enderecos'] = $this->enderecos->findAll();
        $data['title'] = 'Enderecos';
        return view('enderecos/index',$data);
    }

    public function search()
    {
        $data['enderecos'] = $this->enderecos->like('enderecos_rua', $_REQUEST['pesquisar'])->orlike('enderecos_numero', $_REQUEST['pesquisar'])->find();
        $total = count($data['enderecos']);
        $data['msg'] = msg("Dados Encontrados: {$total}",'success');
        $data['title'] = 'Enderecos';
        return view('enderecos/index',$data);

    }

}
