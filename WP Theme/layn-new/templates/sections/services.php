<?php

$services = get_sub_field('services');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');

?>

<section id="services" class="block-services">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-md-8 col-lg-6">
                    <?php if ($subtitle) : ?>
                        <div class="subheadline"><?= $subtitle;?></div>
                    <?php endif; ?>
                    <?php if ($title) : ?>
                        <h2><?= $title;?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if($services) : ?>
            <div class="row">
                <?php foreach($services as $service) : ?>
                    <div class="col-6 col-md-4 col-lg col-xl-2">
                        <?= $service['service'];?>
                    </div>
                <?php endforeach;?>
            </div>
        <?php endif;?>
    </div>
</section>
