<div class="col-lg-8 col-md-8">

    <div class="col-md-12">
        <audio autoplay="true" src="<?php echo base_url("img_sis/sander_patricio.mp3") ?>" preload="auto" controls>
            <p>Seu nevegador não suporta o elemento audio.</p>
        </audio>
    </div>
    <div class="col-md-12" style="clear: both; padding-top: 25px">
        <h2 class="text-center"><?php echo $posts[0]->titulo_post ?></h2>
        <div>
            <?php echo $posts[0]->texto_post ?>
        </div>
    </div>
    <div class="col-md-12" style="clear: both; padding-top: 25px">
        <a href="<?php echo base_url("candidato/a_campanha") ?>"> <i class="glyphicon glyphicon-plus"></i> Mais post</a>
    </div>

</div>