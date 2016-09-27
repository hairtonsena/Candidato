<script>
    window.onload = function () {
        CKEDITOR.replace('post', {
            language: 'pt-br'
        });
    };
</script>
<ol class="breadcrumb">
    <li><a href="<?php echo base_url("cpainel/") ?>">Cpainel</a></li>
    <li><a href="<?php echo base_url("cpainel/blog") ?>">Posts</a></li>
    <li class="active">Alterar Post</li>
</ol>

<form method="post" action="<?php echo base_url("cpainel/blog/salvar_post") ?>">
    <input type="hidden" name="id_post" value="<?php echo $post[0]->id_post ?>" />
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="250" value="<?php echo $post[0]->titulo_post ?>" placeholder="Título do post (max 250 legras)">
    </div>
    <div class="form-group">
        <label for="post">Post</label>
        <textarea class="form-control"  id="post" name="post"> <?php echo $post[0]->texto_post ?></textarea>
    </div>
    <div class="form-group text-right">
        <a href="<?php echo base_url("cpainel/blog/ver_post/" . $post[0]->id_post) ?>" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar</button> 
    </div>
</form>