<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">

        <a class="navbar-brand" href="<?php echo base_url('/') ?>">

            <img src="<?php echo base_url('assets/images/sd_logo.png') ?>" alt="SysDelivery" width="180">
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?php echo base_url('home/funcionarios') ?>">
                        <i class="bi bi-house-fill"></i>
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('categorias') ?>">
                        <i class="bi bi-tag-fill"></i>
                        Categorias
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('produtos') ?>">
                        <i class="bi bi-basket2-fill"></i>
                        Produtos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('imgprodutos') ?>">
                        <i class="bi bi-images"></i>
                        IMG Produtos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('estoques') ?>">
                        <i class="bi bi-inboxes-fill"></i>
                        Estoques
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('clientes') ?>">
                        <i class="bi bi-people"></i>
                        Clientes
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex">
            <a class="btn btn-outline-primary me-2" href="<?php echo base_url('login/logout') ?>">
                <i class="bi bi-unlock"></i>
                sair
            </a>
        </div>
</nav>