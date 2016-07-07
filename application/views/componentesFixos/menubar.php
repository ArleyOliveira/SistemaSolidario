<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(""); ?>">Sistema Solidário</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="<?php echo base_url("index.php/pagina/instituicoes"); ?>"> Instituições </a>
                </li>
                <li><a href="<?php echo base_url("index.php/doador/cadastrar"); ?>">Seja um doador</a></li>
                <li><a href="<?php echo base_url("index.php/instituicao/cadastrar"); ?>">Instituições</a></li>
                <li><a href="<?php echo base_url("index.php/pagina/quemSomos"); ?>">Quem Somos</a></li>
                <li><a href="<?php echo base_url("index.php/pagina/comodoar"); ?>">Como Doar</a></li>
                <li><a href="<?php echo base_url("index.php/pagina/politica"); ?>"> Politica e Segurança </a>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                if ($this->session->email != '' || $this->session->email != null):
                    ?>
                    <div class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true"
                               aria-expanded="false"><?php echo $this->session->nome ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo base_url("usuario/logout")?>">Sair</a>
                                </li>
                            </ul>
                        </li>
                    </div>
                    <?php
                else:
                    echo '<li><a href="'.base_url("usuario/login").'">Entrar</a></li>';
                endif;
                ?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
