<script>
    window.onload = function () {
        CKEDITOR.replace('post');
    };
</script>

<ol class="breadcrumb">
    <li><a href="<?php echo base_url("cpainel/") ?>">Cpainel</a></li>
    <li><a href="<?php echo base_url("cpainel/blog") ?>">Posts</a></li>
    <li class="active">Novo Post</li>
</ol>

<form method="post" action="<?php echo base_url("cpainel/blog/salvar_post") ?>">
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="250" placeholder="Título do post (max 250 legras)">
    </div>
    <div class="form-group">
        <label for="post">Post</label>
        <textarea class="form-control" rows="8" id="post" name="post"></textarea>
    </div>
    <div class="form-group text-right">
        <a href="<?php echo base_url("cpainel/blog") ?>" class="btn btn-default">Cancelar</a>
        <button type="submit" class="btn btn-primary">Salvar</button> 
    </div>
</form>