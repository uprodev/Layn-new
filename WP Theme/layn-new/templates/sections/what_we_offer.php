<?php

$offers = get_sub_field('offers');
$title = get_sub_field('title');
$o = 1;

?>

<section class="block-offer">
    <div class="container-fluid">
        <?php if ($title) : ?>
            <div class="block-header">
                <div class="subheadline"><?= $title;?></div>
            </div>
        <?php endif; ?>

        <?php if ($offers) : ?>
            <div class="cp-tabs">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <nav class="nav nav-tabs">
                            <ul role="tablist">
                                <?php foreach ($offers as $offer) : ?>
                                    <li class="nav-item">
                                        <a class="nav-link<?= $o==1?' active':'';?>" id="tab<?= $o;?>Nav" data-bs-toggle="tab" href="#tab<?= $o;?>" role="tab" aria-controls="tab<?= $o;?>" aria-selected="true"><?= $offer['name'];?></a>
                                    </li>
                                <?php $o++; endforeach; $o = 1;?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-8 col-lg-7">
                        <div class="tab-content" id="myTabContent">
                            <?php foreach ($offers as $offer) : ?>
                                <div class="tab-pane fade<?= $o==1?' show active':'';?>" id="tab<?= $o;?>" role="tabpanel" aria-labelledby="tab<?= $o;?>-tab">
                                    <?= $offer['text'];?>
                                    <?php $link = $offer['link'];

                                    if( $link ):
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>

                                        <div class="buttons">
                                            <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="btn btn-outline-white btn-anchor">
                                                <?= esc_html($link_title); ?>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                                        <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php $o++; endforeach; $o = 1;?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>

    </div>
</section>
