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


    <div class="container pt-4 pb-5 bg-light  ">
        <h2 class="border-bottom border-2 border-primary">
            <?= ucfirst($form).' '.$title ?>
        </h2>

        <form action="<?= base_url('enderecos/'.$op); ?>" method="post">
            <div class="mb-3">
                <label for="enderecos_rua" class="form-label"> Rua </label>
                <input type="text" class="form-control" name="enderecos_rua" value="<?= $enderecos->enderecos_rua; ?>"  id="enderecos_rua">
            </div>

            <div class="mb-3">
                <label for="enderecos_numero" class="form-label"> Número </label>
                <input type="number" min="1" class="form-control" name="enderecos_numero" value="<?= $enderecos->enderecos_numero; ?>"  id="enderecos_numero">
            </div>

            <div class="mb-3">
                <label for="enderecos_complemento" class="form-label"> Complemento </label>
                <input type="text" class="form-control" name="enderecos_complemento" value="<?= $enderecos->enderecos_complemento; ?>"  id="enderecos_complemento">
            </div>

            <div class="mb-3">
                <label for="enderecos_cep" class="form-label"> CEP </label>
                <input type="text" class="form-control" name="enderecos_cep" value="<?= $enderecos->enderecos_cep; ?>"  id="enderecos_cep">
            </div>

            <div class="mb-3">
                <label for="enderecos_status" class="form-label"> Status </label>
                <select class="form-control" name="enderecos_status" id="enderecos_status">
                    <?php 
                        for($i=0; $i < count($status);$i++){ 
                            $selected = '';
                            if($enderecos->enderecos_status == $status[$i]['id']){
                                $selected = 'selected'; 
                            }
                        ?>
                    <option <?= $selected; ?> value="<?= $status[$i]['id']; ?>">
                        <?= $status[$i]['status']; ?>
                    </option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="enderecos_cidades_id" class="form-label"> Cidade </label>
                <select class="form-control" name="enderecos_cidades_id"  id="enderecos_cidades_id">
                    
                    <?php 
                    for($i=0; $i < count($cidades);$i++){ 
                        $selected = '';
                        if($cidades[$i]->cidades_id == $enderecos->enderecos_cidades_id){
                            $selected = 'selected'; 
                        }
                    ?>
                        <option <?= $selected; ?> value="<?= $cidades[$i]->cidades_id; ?>">
                            <?= $cidades[$i]->cidades_nome; ?>
                        </option>
                    <?php } ?>

                </select>
            </div>
            
            <input type="hidden" name="enderecos_usuarios_id" value="<?= $login->usuarios_id; ?>" >
            <input type="hidden" name="enderecos_id" value="<?= $enderecos->enderecos_id; ?>" >

            <div class="mb-3">
                <button class="btn btn-success" type="submit"> <?= ucfirst($form)  ?> <i class="bi bi-floppy"></i></button>
            </div>
        
        </form>

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
