<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary"
            data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('/') ?>">

                    <img src="<?php echo base_url('assets/images/sd_logo.png') ?>" alt="SysDelivery" width="180">
                </a>
                <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="<?php echo base_url('user') ?>">
                                <i class="bi bi-house-fill"></i>
                                Home
                            </a>
                        </li>

                          

                    </ul>


                    <div class="d-flex">
                        <a class="btn btn-outline-primary me-2" 
                        href="<?php echo base_url('login/logout') ?>">
                            <i class="bi bi-unlock"></i>
                            sair
                        </a>
                    </div>
                </div>
            </div>
        </nav>