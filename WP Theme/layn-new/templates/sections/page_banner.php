<?php

$img = get_sub_field('image');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$buttons = get_sub_field('buttons');

?>

<section class="block-banner">
    <?php if($img):?>
        <div class="image">
            <img src="<?= $img['url'];?>" alt="<?= $img['alt'];?>" />
        </div>
    <?php endif;?>
    <div class="text">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-5">
                    <?php if($title):?>
                        <h1><?= $title;?></h1>
                    <?php endif;?>
                    <?php if($subtitle):?>
                        <p><?= $subtitle;?></p>
                    <?php endif;?>
                    <?php if($buttons):?>
                        <div class="buttons">
                            <?php foreach($buttons as $btn):
                                $link = $btn['link'];

                                if( $link ):
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="btn btn-outline-white" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                        <?= esc_html($link_title); ?>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                                <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach;?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
