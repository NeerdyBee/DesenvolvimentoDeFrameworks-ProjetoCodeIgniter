<?php
    helper('functions');
    session();
    if(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
        if($login->usuarios_nivel == 2){
    
?>
<?= $this->extend('Templates_funcionario') ?>
<?= $this->section('content') ?>


<div class="container pt-4 pb-5 bg-light">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Funcionario</a></li>
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <br>
        </ol>
        <span class="breadcrumb-text"> Seja bem vindo <?= $login->usuarios_nome ?></span>
    </nav>
    <h2 class="border-bottom border-2 border-primary">
        Administrador
    </h2>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Operações do Sistema</h5>
                </div>
                <div class="card-body">
                    <h5 class="mb-3">Pessoas do Sistema</h5>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a href="<?= base_url('clientes') ?>" class="btn btn-warning w-100">
                                <i class="bi bi-people"></i><br>
                                Clientes
                            </a>
                        </div>
                    </div>
                    <hr>
                    <h5 class="mb-3">Produtos do Sistema</h5>
                    <div class="row">
                        
                        <div class="col-md-3 mb-3">
                            <a href="<?= base_url('produtos') ?>" class="btn btn-warning w-100">
                                <i class="bi bi-basket2-fill"></i><br>
                                Produtos
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="<?= base_url('categorias') ?>" class="btn btn-warning w-100">
                                <i class="bi bi-tag-fill"></i><br>
                                Categorias
                            </a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="<?= base_url('estoques') ?>" class="btn btn-warning w-100">
                                <i class="bi bi-inboxes-fill"></i><br>
                                Estoques
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <p>
        </p>
        </div>

<?= $this->endSection() ?>

<?php 
        }else{

            $data['msg'] = msg("Sem permissão de acesso!","danger");
            echo view('login',$data);
        }
    }else{

        $data['msg'] = msg("O usuário não está logado!","danger");
        echo view('login',$data);
    }

?>