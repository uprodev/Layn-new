<?php

$slider = get_sub_field('slider');

if($slider):
    ?>

    <section class="block-media-slider bg-dark text-white">
        <div class="container-fluid">
            <div class="slider-controls">
                <div class="swiper-pagination"></div>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                        <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                    </g>
                </svg>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach($slider as $item):?>
                        <div class="swiper-slide">
                            <figure>
                                <?php if($item['image']):?>
                                    <span><img src="<?= $item['image']['url'];?>" alt="<?= $item['image']['alt'];?>"
                                        /></span>
                                    <?php endif;?>
                                    <?php if($item['caption']):?>
                                        <figcaption><?= $item['caption'];?></figcaption>
                                    <?php endif;?>
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

    <?php endif;