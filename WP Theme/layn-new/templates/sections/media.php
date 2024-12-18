<?php

$style = get_sub_field('style');
$slider = get_sub_field('slider');
$item_1 = get_sub_field('item_1');
$item_2 = get_sub_field('item_2');
$item_3 = get_sub_field('item_3');

?>

<section class="block-media<?php if($style == 'Slider'):?>-slider bg-primary
text-white<?php else:?> block-media--cols3<?php endif;?>">
    <div class="container-fluid">
        <?php if($style == 'Slider'):?>
            <div class="slider-controls">
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                        <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                    </g>
                </svg>
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($slider as $slide):?>
                        <div class="swiper-slide">
                            <figure>
                                <?php if($slide['image']):?>
                                    <span><img src="<?= $slide['image']['url'];?>" alt="<?= $slide['image']['url'];?>" /></span>
                                <?php endif;?>
                                <?php if($slide['caption']):?>
                                    <figcaption><?= $slide['caption']; ?></figcaption>
                                <?php endif;?>
                            </figure>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        <?php else:?>
            <div class="row">
                <?php if (!empty($item_1['image'])): ?>
                    <div class="col">
                        <figure>
                            <?php if($item_1['image']):?>
                                <span><img src="<?= $item_1['image']['url'];?>" alt="<?= $item_1['image']['alt'];?>"
                                    /></span>
                            <?php endif;?>
                        </figure>
                    </div>
                <?php endif;?>
                <?php if (!empty($item_2['image'])): ?>
                    <div class="col">
                        <figure>
                            <?php if($item_2['image']):?>
                                <span><img src="<?= $item_2['image']['url'];?>" alt="<?= $item_2['image']['alt'];?>"
                                    /></span>
                            <?php endif;?>
                        </figure>
                    </div>
                <?php endif;?>
                <?php if (!empty($item_3['image'])): ?>
                    <div class="col">
                        <figure>
                            <?php if($item_3['image']):?>
                                <span><img src="<?= $item_3['image']['url'];?>" alt="<?= $item_3['image']['alt'];?>"
                                    /></span>
                            <?php endif;?>
                        </figure>
                    </div>
                <?php endif;?>
            </div>
        <?php endif;?>
    </div>
</section>
