<ol class="breadcrumb">
    <li><a href="<?php echo base_url("cpainel/") ?>">Cpainel</a></li>
    <li class="active">Posts</li>
</ol>

<a class="btn btn-primary" href="<?php echo base_url("cpainel/blog/novo_post") ?>">Novo Post</a>
<table class="table">
    <thead>
        <tr>
            <th>
                Titulo
            </th>
            <th class="col-md-1 text-center">
                Data
            </th>
            <th class="col-md-1 text-center">
                <i class="glyphicon glyphicon-globe"></i>
            </th>
            <th class="col-md-1 text-center">
                Visualizar
            </th>
        </tr>
    </thead>
    <tbody>

        <?php for ($i = 0; $i < count($posts); $i++) { ?>
            <tr>
                <td>
                    <?php echo $posts[$i]->titulo_post; ?>
                </td>
                <td class="text-center">
                    <?php echo $posts[$i]->data_post; ?>
                </td>
                <td class="text-center">
                    <?php if ($posts[$i]->status_post == 0) { ?>
                        <i class="glyphicon glyphicon-globe"></i>
                    <?php } else { ?>
                        <i style="color: #0000ff" class="glyphicon glyphicon-globe"></i>
                    <?php } ?>
                </td>
                </td>
                <td class="text-center">
                    <a class="btn btn-default" href="<?php echo base_url("cpainel/blog/ver_post/" . $posts[$i]->id_post) ?>" >Visualizar</a> 
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>