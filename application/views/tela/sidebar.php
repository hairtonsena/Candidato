<div class="col-lg-4 col-md-4" style="margin-top: 50px;">
    <div class="panel" style="background-color: #3e4095;">
        <div class="panel-heading" style="color: white">
            AGENDA  
        </div>
        <ul class="list-group">

            <?php foreach ($agendas as $agenda) { ?>

                <li class="list-group-item" >
                    <span style="font-size: 12px; color: #666"> <strong><?php echo date("d/m/Y", strtotime($agenda->data_agenda)) ?></strong></span><br>
                    <?php echo $agenda->descricao_agenda ?>
                </li>
            <?php } ?>
        </ul>
    </div>
    <div>

        <audio src="<?php echo base_url("img_sis/sander_patricio.mp3") ?>" preload="auto" controls>
            <p>Seu nevegador não suporta o elemento audio.</p>
        </audio>
    </div>
    <div>
        <img src="<?php echo base_url("img_sis/lateral.jpg") ?>" class="thumbnail" />
    </div>
</div>