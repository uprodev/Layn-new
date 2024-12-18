<?php

$slider = get_sub_field('slider');

if($slider):
?>

    <section class="block-media">
        <div class="container-fluid">
            <div class="swiper slider-image">
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