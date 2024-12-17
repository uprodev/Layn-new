<?php

$item_1 = get_sub_field('item_1');
$item_2 = get_sub_field('item_2');
$item_3 = get_sub_field('item_3');

?>

<section class="block-media block-media--cols2 bg-primary text-white">
    <div class="container-fluid">
        <div class="row">
            <?php if (!empty($item_1)): ?>
                <div class="col-md-8">
                    <figure>
                        <?php if($item_1['image']):?>
                            <span><img src="<?= $item_1['image']['url'];?>" alt="<?= $item_1['image']['alt'];?>"
                                /></span>
                        <?php endif;?>
                        <?php if($item_1['caption']):?>
                            <figcaption><?= $item_1['caption'];?></figcaption>
                        <?php endif;?>
                    </figure>
                </div>
            <?php endif;?>
            <?php if (!empty($item_2)): ?>
                <div class="col-md-4">
                    <figure>
                        <?php if($item_2['image']):?>
                            <span><img src="<?= $item_2['image']['url'];?>" alt="<?= $item_2['image']['alt'];?>"
                                /></span>
                        <?php endif;?>
                        <?php if($item_2['caption']):?>
                            <figcaption><?= $item_2['caption'];?></figcaption>
                        <?php endif;?>
                    </figure>
                </div>
            <?php endif;?>
        </div>
    </div>
</section>
