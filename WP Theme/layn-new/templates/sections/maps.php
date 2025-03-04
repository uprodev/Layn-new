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
                <div class="row">
                    <div class="col-md-4 col-lg-2">
                        <div class="subheadline"><?= $title;?></div>
                    </div>
                </div>
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
                <div class="row justify-content-between gx-lg-0">
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
                           <div class="col-md-8 col-lg-6">
                            <div class="tab-content" id="locationsContent">
                                <?php foreach($locations as $loc):?>
                                    <div class="tab-pane fade<?= $m==1?' show active':'';?>" id="location<?= $m;?>" role="tabpanel" aria-labelledby="location<?= $m;?>-tab">
                                        <?php if($loc['text']):?>
                                            <p><?= $loc['text'];?></p>
                                        <?php endif;?>

                                        <div class="tab-footer">

                                            <?php if ($loc['link']): ?>
                                                <div class="buttons">
                                                    <a href="<?= $loc['link']['url'] ?>" class="btn btn-outline-dark btn-anchor"<?php if($loc['link']['target']) echo ' target="_blank"' ?>>
                                                        <?= html_entity_decode($loc['link']['title']) ?>
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <g><path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" /><path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" /></g>
                                                        </svg>
                                                    </a>
                                                </div>
                                            <?php endif ?>

                                            <?php if($loc['bottom_text']):?>
                                                <p><?= $loc['bottom_text'];?></p>
                                            <?php endif;?>
                                        </div>
                                        
                                    </div>
                                    <?php $m++; endforeach; $m = 1;?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif;?>

            </div>
        </section>
