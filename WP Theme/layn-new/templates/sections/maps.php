<?php

$img = get_sub_field('image');
$title = get_sub_field('title');
$marker = get_sub_field('marker')??get_template_directory_uri().'/images/marker.svg';
$locations = get_sub_field('locations');

?>

<section class="block-map">
    <div class="container-fluid">

        <?php if($title):?>
            <div class="block-header">
                <div class="subheadline"><?= $title;?></div>
            </div>
        <?php endif;?>

        <div class="row">
            <div class="col-md-8">
                <div class="map" id="map" data-icon="<?= $marker;?>"></div>
            </div>
            <?php if($img):?>
                <div class="col-md-4 d-none d-md-block">
                    <figure class="map-image">
                        <img id="mapImage" src="<?= $img['url'];?>" alt="<?= $img['alt'];?>"/>
                    </figure>
                </div>
            <?php endif;?>
        </div>

        <?php if($locations): $m = 1; ?>
            <div class="cp-tabs">
                <div class="row justify-content-between">
                    <div class="col-md-4">
                        <nav class="nav nav-tabs">
                            <ul id="locationTabs" role="tablist">
                                <?php foreach($locations as $loc):?>
                                    <li class="nav-item">
                                        <a class="nav-link<?= $m==1?' active':'';?>" id="location<?= $m;?>Nav"
                                           data-bs-toggle="tab" href="#location<?= $m;?>" role="tab"
                                           aria-controls="location<?= $m;?>" aria-selected="true" data-lat="<?= $loc['map']['lat'];?>" data-lng="<?= $loc['map']['lng'];?>" data-img="<?= $loc['image']['url'];?>" data-index="<?= $m-1; ?>"><?= $loc['name'];?></a>
                                    </li>
                                <?php $m++; endforeach; $m = 1;?>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-8 col-lg-7">
                        <div class="tab-content" id="locationsContent">
                            <?php foreach($locations as $loc):?>
                                <div class="tab-pane fade<?= $m==1?' show active':'';?>" id="location<?= $m;?>" role="tabpanel" aria-labelledby="location<?= $m;?>-tab">
                                    <?php if($loc['text']):?>
                                        <p><?= $loc['text'];?></p>
                                    <?php endif;?>
                                    <?php if($loc['bottom_text']):?>
                                        <div class="tab-footer">
                                            <p><?= $loc['bottom_text'];?></p>
                                        </div>
                                    <?php endif;?>
                                </div>
                            <?php $m++; endforeach; $m = 1;?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>

    </div>
</section>
