<?php
helper('functions');
session();

if (isset($_SESSION['login'])) {
    $login = $_SESSION['login'];
    if ($login->usuarios_nivel >= 1) {
        if ($login->usuarios_nivel == 1) {
            echo $this->extend('Templates_admin');
        } else {
            echo $this->extend('Templates_funcionario');
        }
        ?>

<?= $this->section('content') ?>

    <div class="container  ">

        <h2 class="border-bottom border-2 border-primary mt-3 mb-4"> <?= $title ?> </h2>

        <?php if(isset($msg)){echo $msg;} ?>

        <form action="<?= base_url('imgprodutos/search'); ?>" class="d-flex" role="search" method="post">
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
                    <th scope="col">Img</th>
                    <th scope="col">Link</th>
                    <th scope="col">
                        <a class="btn btn-success"  href="<?= base_url('imgprodutos/new'); ?>">
                            Novo
                            <i class="bi bi-plus-circle"></i>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php for($i=0; $i < count($imgprodutos); $i++){ ?>
                    <tr>
                        <th scope="row"><?= $imgprodutos[$i]->imgprodutos_id; ?></th>
                        <td>
                            <img width="50" src="<?= base_url('assets/'.$imgprodutos[$i]->imgprodutos_link) ?>" alt="<?= $imgprodutos[$i]->imgprodutos_descricao ?>">
                        </td>
                        <td>  
                            <?= 'assets/'.$imgprodutos[$i]->imgprodutos_link; ?>
                        </td>
                        <td>
                            <a class="btn btn-primary"  href="<?= base_url('imgprodutos/edit/'.$imgprodutos[$i]->imgprodutos_id); ?>">
                                Editar
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-danger"  href="<?= base_url('imgprodutos/delete/'.$imgprodutos[$i]->imgprodutos_id); ?>">
                                Excluir
                                <i class="bi bi-x-circle"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

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