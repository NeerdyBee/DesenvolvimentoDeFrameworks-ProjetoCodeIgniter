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

<div class="container pt-4 pb-5 bg-light">
    <h2 class="border-bottom border-2 border-primary">
        <?= ucfirst($form) . ' ' . $title ?>
    </h2>

    <form action="<?= base_url('estoques/' . $op); ?>" method="post">

        <div class="mb-3">
            <label for="estoques_produtos_id" class="form-label">Produto</label>
            <select class="form-select" name="estoques_produtos_id" id="estoques_produtos_id" required>
                <option value="">Selecione um produto</option>
                <?php foreach ($produtos as $produto): ?>
                <option value="<?= $produto->produtos_id ?>"
                    <?= isset($estoques->estoques_produtos_id) && $estoques->estoques_produtos_id == $produto->produtos_id ? 'selected' : '' ?>>
                    <?= esc($produto->produtos_nome) ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="estoques_quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" name="estoques_quantidade" value="<?= $estoques->estoques_quantidade ?? ''; ?>"
                id="quantidade" required>
        </div>

        <input type="hidden" name="estoques_id" value="<?= $estoques->estoques_id ?? ''; ?>">

        <div class="mb-3">
            <button class="btn btn-success" type="submit">
                <?= ucfirst($form) ?> <i class="bi bi-floppy"></i>
            </button>
        </div>
    </form>
</div>

<?= $this->endSection() ?>

<?php
    } else {
        $data['msg'] = msg("Sem permissão de acesso!", "danger");
        echo view('login', $data);
    }
} else {
    $data['msg'] = msg("O usuário não está logado!", "danger");
    echo view('login', $data);
}
?>