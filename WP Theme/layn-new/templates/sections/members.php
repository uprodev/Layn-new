<?php

$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$membership = get_sub_field('membership');

?>

<section class="block-members">
    <div class="container-fluid">
        <div class="block-header">

            <?php if($subtitle):?>
                <div class="row">
                    <div class="col-md-4 col-lg-2">
                        <div class="subheadline"><?= $subtitle;?></div>
                    </div>
                </div>                    
            <?php endif;?>

            <?php if($title):?>
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <h2><?= $title;?></h2>
                    </div>
                </div>
            <?php endif;?>

        </div>

        <?php if($membership):
            $i = 1; ?>
            <div class="cp-tabs">
                <div class="nav-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <nav class="nav nav-tabs">
                                <ul role="tablist">
                                    <?php foreach($membership as $member):?>
                                        <li class="nav-item">
                                            <a class="nav-link<?= $i==1?' active':'';?>" id="tab<?= $i;?>Nav" data-bs-toggle="tab" href="#<?= strtolower($member['name']);?>" role="tab" aria-controls="social" aria-selected="true"><?= $member['name'];?></a>
                                        </li>
                                        <?php $i++; endforeach; $i=1;?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content" id="tabContent">
                        <?php foreach($membership as $member):
                            $link = $member['link'];?>
                            <div class="tab-pane fade<?= $i==1?' show active':'';?>" id="<?= strtolower($member['name']);?>"
                             role="tabpanel">
                             <div class="row justify-content-between">
                                <div class="col-md-6 col-lg-4">
                                    <div class="text">
                                        <?= $member['text'];?>
                                        <?php if( $link ):
                                            $link_url = $link['url'];
                                            $link_title = $link['title'];
                                            $link_target = $link['target'] ? $link['target'] : '_self';
                                            ?>
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
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-6 ps-lg-0">
                                    <figure>
                                        <?php if($member['image']):?>
                                            <span><img src="<?= $member['image']['url'];?>" alt="<?=
                                            $member['image']['alt'];?>" /></span>
                                        <?php endif;?>
                                        <?php if($member['caption']):?>
                                            <figcaption><?= $member['caption']; ?></figcaption>
                                        <?php endif;?>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endforeach; $i=1;?>
                    </div>
                </div>
            <?php endif;?>

        </div>
    </section>
