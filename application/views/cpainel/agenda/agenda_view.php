<div class="col-lg-12 semMargem">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("cpainel/") ?>">Cpainel</a></li>
        <li class="active">Agenda</li>
    </ol>
</div>
<div class="col-lg-12 semMargem">
    <a  href="<?php echo base_url("cpainel/agenda/nova") ?>" class="btn btn-primary" >Novo Agenda</a>

    <?php if ($this->session->flashdata("mensagem")) { ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Atenção! </strong><?php echo $this->session->flashdata("mensagem") ?></div>
    <?php } ?>
    <div style="margin-top: 5px">
        <table class="table table-bordered" id="tabelaCategoria">
            <thead>
                <tr>
                    <th class="col-lg-4"> Descrição </th>
                    <th class="col-lg-1 text-center"> Data </th>
                    <th class="col-lg-1 text-center"> Alterar </th>
                    <th class="col-lg-1 text-center"> Excluir </th>
                    <th class="col-lg-1 text-center"> status </th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($agendas as $agenda) {
                    if ($agenda->status_agenda == 0) {
                        ?>
                        <tr>

                            <td class=""><?php echo $agenda->descricao_agenda ?></td>
                            <td class="text-center">
                                <?php
                                if ($agenda->data_agenda != "0000-00-00")
                                    echo date('d/m/Y', strtotime($agenda->data_agenda));
                                else
                                    echo "00/00/0000";
                                ?>
                            </td>
                            <td class="text-center"><a href="<?php echo base_url('cpainel/agenda/alterar/' . $agenda->id_agenda) ?>"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> </a></span></td>
                            <td class="text-center"><a href="<?php echo base_url('cpainel/agenda/excluir/' . $agenda->id_agenda) ?>"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> </a></span></td>
                            <td class="text-center">

                                <a href="<?php echo base_url("cpainel/agenda/ativar_desativar_agenda/".$agenda->id_agenda) ?>" >
                                    <span class="glyphicon glyphicon-unchecked" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                    <?php }else {
                        ?>
                        <tr>

                            <td class=""><?php echo $agenda->descricao_agenda ?></td>
                            <td class="text-center">
                                <?php
                                if ($agenda->data_agenda != "0000-00-00")
                                    echo date('d/m/Y', strtotime($agenda->data_agenda));
                                else
                                    echo "00/00/0000";
                                ?>
                            </td>
                            <td class="text-center"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></td>
                            <td class="text-center"> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
                            <td class="text-center">
                                <a href="<?php echo base_url("cpainel/agenda/ativar_desativar_agenda/".$agenda->id_agenda) ?>" >
                                    <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>


<!--Comfimação de exclusão-->
<div class="modal fade" id="modelExcluirNoticia" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Excluir Lembrete</h4>
            </div>
            <div class="modal-body">
                <p>Você realmente deseja excluir este lembrete?</p>
                <input type="hidden" id="noticia_excluir" value="" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                <button type="button" class="btn btn-primary" onclick="Noticia.excluir_noticia()">Sim</button>
            </div>
        </div>
    </div>
</div>
<!--Final de confirmação-->
<!--Madal para exibir o conteudo da notícia-->
<div class="modal fade" id="modelExibirConteudoNoticia" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Notícia</h4>
            </div>
            <div class="modal-body" id="textoNoticia">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Fim forme de alterar senha aluno -->
