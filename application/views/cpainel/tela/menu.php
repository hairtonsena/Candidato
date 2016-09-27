<nav class="navbar navbar-default" role="navigation" >
    <div class="container" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url("cpainel/inicio"); ?>">cPainel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">

                <!--<li class="active"><a href="#">Link</a></li>
                <li><a href="#"></a></li>-->
                <!--                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Publicação <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php // echo base_url("cpainel/noticia");        ?>"> Notícias </a></li>
                                        <li><a href="<?php //  echo base_url("cpainel/lembrete");        ?>"> Lembretes </a></li>
                                        
                                    </ul>
                                </li>-->
                <li><a href="<?php echo base_url("cpainel/blog"); ?>"> Blog </a></li>
                <li>
                    <a href="<?php echo base_url("cpainel/agenda"); ?>" >Agenda</a>
                </li>
                <li><a href="<?php echo base_url("cpainel/sobre"); ?>"> Sobre </a></li>



            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"> <?php echo $this->session->userdata('nome_usuario'); ?> </a></li>
                <li><a href="<?php echo base_url("cpainel/seguranca/logoutUser") ?>"> Sair </a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>
<div class="container col-lg-12 " >