<?php
    helper('functions');
    session();
    if(isset($_SESSION['login'])){
        $login = $_SESSION['login'];
        print_r($login);
        if($login->usuarios_nivel == 1){
    
?>
<?= $this->extend('Templates_admin') ?>
<?= $this->section('content') ?>

    <div class="container  ">

        <h2 class="border-bottom border-2 border-primary mt-3 mb-4"> <?= $title ?> </h2>

        <?php if(isset($msg)){echo $msg;} ?>

        <form action="<?= base_url('enderecos/search'); ?>" class="d-flex" role="search" method="post">
            <input class="form-control me-2" name="pesquisar" type="search"
                placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Rua</th>
                    <th scope="col">Numero</th>
                    <th scope="col">
                        <a class="btn btn-success"  href="<?= base_url('enderecos/new'); ?>">
                            Novo
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php for($i=0; $i < count($enderecos); $i++){ 
                    if ($enderecos[$i]->enderecos_usuarios_id == $login->usuarios_id) {
                    ?>
                    <tr>
                        <th scope="row"><?= $enderecos[$i]->enderecos_id; ?></th>
                        <td><?= $enderecos[$i]->enderecos_rua.' '.$enderecos[$i]->enderecos_numero; ?></td>
                        <td>
                            <a class="btn btn-primary"  href="<?= base_url('enderecos/edit/'.$enderecos[$i]->enderecos_id); ?>">
                                Editar
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-danger"  href="<?= base_url('enderecos/delete/'.$enderecos[$i]->enderecos_id); ?>">
                                Excluir
                                <i class="bi bi-x-circle"></i>
                            </a>
                        </td>
                    </tr>
                <?php }} ?>

            </tbody>
        </table>

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