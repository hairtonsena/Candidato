<ol class="breadcrumb">
    <li><a href="<?php echo base_url("cpainel/") ?>">Cpainel</a></li>
    <li><a href="<?php echo base_url("cpainel/blog") ?>">Posts</a></li>
    <li class="active">Ver Post</li>
</ol>
<div class="col-lg-12 text-right">
    <?php if ($post[0]->status_post == 0) { ?>
        <a class="btn btn-primary" href="<?php echo base_url("cpainel/blog/ativar_desativar_post/" . $post[0]->id_post) ?>">Publicar</a>
        <a class="btn btn-success" href="<?php echo base_url("cpainel/blog/alterar_post/" . $post[0]->id_post) ?>">Alterar</a>
        <a class="btn btn-danger" href="<?php echo base_url("cpainel/blog/excluir_post/" . $post[0]->id_post) ?>">Excluir</a>
    <?php } else { ?>
        <a class="btn btn-danger" href="<?php echo base_url("cpainel/blog/ativar_desativar_post/" . $post[0]->id_post) ?>">Desativar</a>
    <?php } ?>
</div>
<h1 class="text-center"><?php echo $post[0]->titulo_post ?></h1>
<div class=" col-lg-12 text-center">
    <?php echo $post[0]->texto_post ?>
</div>

