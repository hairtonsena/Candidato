<div class="col-lg-8 col-md-8">

    <h2 class="">
        <?php echo $post[0]->titulo_post ?>
    </h2>
    <hr>
    <div class="col-lg-12">
        <?php echo $post[0]->texto_post ?>
    </div>
    <hr>
    <h3>
        Veja outros:
    </h3>
    <table class="table">
        <tbody>
            <?php foreach ($posts as $post) { ?>
                <tr>
                    <td>
                        <a href="<?php echo base_url("candidato/a_campanha/" . $post->id_post) ?>">
                            <span style="font-size: 16px"> <?php echo $post->titulo_post ?> </span>
                        </a>
                    </td>
                    <td class="col-md-1">
                        <?php echo date("d/m/Y", strtotime($post->data_post)) ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



