
<nav id="header" class="navbar navbar-fixed-top">
    <div id="header-container" class="container navbar-container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a id="brand" class="navbar-brand" href="<?php echo base_url() ?>">SANDER PATRÍCIO</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url() ?>">Início</a></li>
                <li><a href="<?php echo base_url("candidato/a_campanha") ?>">A campanha</a></li>
                <li><a href="<?php echo base_url("candidato/projetos") ?>">Projetos</a></li>
                <li><a href="<?php echo base_url("candidato/sobre") ?>">Sobre</a></li>
            </ul>



            <ul class="nav navbar-nav navbar-right">

                <!--<li><a href="<?php // echo base_url("candidato/agenda") ?>">Agenda</a></li>-->
                <li><a href="<?php echo base_url("candidato/contatos") ?>">Contatos</a></li>
            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->


<div class="container baner">
    <img class="img-responsive" src="<?php echo base_url("img_sis/baner.jpg") ?>" />
</div>
  <div class="container">