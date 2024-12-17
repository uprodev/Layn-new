<?php

$link = get_sub_field('link');
$title = get_sub_field('title');

?>

<section class="block-intro">
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-6">
                    <div class="text">
                        <?php if($title):?>
                            <hr />
                            <h2><?= $title;?></h2>
                        <?php endif;?>
                        <?php if($link):
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';?>
                            <div class="buttons">
                                <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn btn-outline-dark btn-anchor">
                                    <?= esc_html($link_title); ?>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                            <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
