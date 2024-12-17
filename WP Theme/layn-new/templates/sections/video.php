<?php

$img = get_sub_field('poster');
$video = get_sub_field('video');
$description = get_sub_field('description');

?>

<section id="video" class="block-video">
    <div class="container-fluid">
        <div class="video-wrapper">
            <?php if($video):?>
                <div class="video">
                    <video src="<?= $video['url'];?>" poster="<?= $img['url'];?>"></video>
                    <a href="#" class="btn-play"><img src="<?= get_template_directory_uri();?>/images/icons/play.svg" alt="play" /></a>
                </div>
            <?php endif;?>
            <?php if($description):?>
                <div class="video-title"><?= $description;?></div>
            <?php endif;?>
        </div>
    </div>
</section>
