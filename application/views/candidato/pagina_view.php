<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url('bt/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('css/candidato/style_candidato.css'); ?>" rel="stylesheet">
        <title>Prof. André Aristóreles - Candidato a Diretor Geral do Instituto Federal Januária</title>

    </head>
    <body>
        <div id="especo_logo" class="jumbotron" >
            <p>Para Diretor Geral do IFNMG Januária vote</p>
            <h1 id="nome_professor">Prof. André Aristóteles</h1>
        </div>
        <nav>
            <div class="container">
                <div class="col-lg-8 col-md-9">
                    <a href="<?php echo base_url("candidato") ?>">Home </a> | 
                    <a href="<?php echo base_url("candidato/acompanhe_a_campanha") ?>">Acompanhe a campanha </a> |

                    <a href="<?php echo base_url("candidato/plano") ?>">Plano Preliminar de Gestão </a>


                </div>
                <div class="col-lg-4 col-md-3 text-right">
                    <a href="<?php echo base_url("candidato/participe") ?>">Participe da campanha! </a>
                   
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="col-lg-9 col-md-9">
                <?php $this->load->view($pagina) ?>
            </div>
            <div class="col-lg-3 col-md-3" style="margin-top: 15px;">
                <div class="panel panel-success">
                    <ul class="list-group">
                        <a class="list-group-item" href="<?php echo base_url("candidato/conheca_o_candidato") ?>">Conheça o candidato </a>
                        <a class="list-group-item" href="<?php echo base_url("candidato/curriculum") ?>">Curriculum </a>
                        <a class="list-group-item" href="<?php echo base_url("candidato/boato") ?>">Conhecendo a Verdade </a>
<!--                        <a class="list-group-item" href="<?php // echo base_url("candidato/agenda")  ?>">Agenda </a>
                        <a class="list-group-item" href="<?php // echo base_url("candidato/contatos")  ?>">Contatos </a>-->

                    </ul>
                </div>
                
                <div>
                    <img src="<?php echo base_url("imagens/candidato/vote.jpg") ?>" width="100%" />
                </div>
            </div>
        </div>

        <footer>
            <div id="rodape" class="container text-center">
                <div class="col-lg-4 col-md-4">
                    <a href="#"><img style="margin: 0px" src="<?php echo base_url('imagens/candidato/logo.png') ?>" width="170px" /></a>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div id="menu_rodape" class="col-lg-12">
                        <a href="<?php echo base_url("candidato") ?>">Home </a> | 
                        <a href="<?php echo base_url("candidato/acompanhe_a_campanha") ?>">Acompanhe a campanha </a> |
                        <a href="<?php echo base_url("candidato/conheca_o_candidato") ?>">Conheça o candidato </a> |
                        <a href="<?php echo base_url("candidato/curriculum") ?>">Curriculum </a> |
                        <!--<a href="<?php // echo base_url("candidato/propostas")  ?>">Propostas </a> |-->
                        <!--<a href="<?php // echo base_url("candidato/agenda")  ?>">Agenda </a> |-->
                        <!--<a href="<?php // echo base_url("candidato/contatos")  ?>">Contatos </a> |-->
                        <a href="<?php echo base_url("candidato/participe") ?>">Participe da campanha! </a> 
                        <!--| <a href="#">Denuncie boatos </a>-->
                    </div>
                    <div id="sociais" class="col-lg-12">

                        <a target="_blank" href="https://www.facebook.com/professorandrearistoteles"> <img src="<?php echo base_url("imagens/icon/sociais/png/facebook.png") ?>" width="50" /></a>
                        <a href="#"><img src="<?php echo base_url("imagens/icon/sociais/png/linkedin.png") ?>" width="50" /></a>
                        <a href="#"><img src="<?php echo base_url("imagens/icon/sociais/png/twitter.png") ?>" width="50" /></a>
                        <a href="#"><img src="<?php echo base_url("imagens/icon/sociais/png/instagram.png") ?>" width="50" /></a>

                    </div>
                </div>
            </div>
            <div id="dev" class="text-center">
                Desenvolvido por <a target="_blank" href="http://cored.com.br"> Core D</a> todos os direitos reservados.
            </div>
        </footer>
    </body>
</html>