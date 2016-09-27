<div class="col-lg-12 semMargem">
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("cpainel/") ?>">cpainel</a></li>
        <li><a href="<?php echo base_url("cpainel/agenda") ?>">Agenda</a></li>
        <li class="active">Alterar agenda</li>       
    </ol>
</div>

<div class="col-lg-12 semMargem">
    <form class="form-horizontal" action="<?php echo base_url("cpainel/agenda/salvar_agenda"); ?>" method="post" role="form">
        <input name="id_agenda" type="hidden" value="<?php echo $agenda[0]->id_agenda ?>"/>
        <fieldset>
            <legend>Alterar agenda</legend>
            <div class="col-lg-4"  style="padding-top: 5px;">
                <div class="form-group">
                    <label for="data_agenda" class="col-sm-12">Data agenda</label>
                    <div class="col-sm-12">
                        <input type="text" name="data_agenda" class="form-control" value="<?php echo date("d/m/Y", strtotime($agenda[0]->data_agenda)) ?>" placeholder="00/00/0000">
                        <span class="text-danger"> <?php echo form_error('data_agenda'); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-8"  style="padding-top: 5px; border-left: 1px solid #ddd;">
                <div class="form-group">
                    <label for="conteudo_agenda" class="col-sm-12">Agenda</label>
                    <div class="col-sm-12">
                        <textarea id="descricao_agenda" name="descricao_agenda" rows="6" class="form-control"><?php echo $agenda[0]->descricao_agenda ?></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-8 col-sm-4">
                    <a href="<?php echo base_url("cpainel/agenda"); ?>" class="btn btn-default" >Cancelar</a>
                    <button type="submit" class="btn btn-primary"> Salvar </button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
</div>