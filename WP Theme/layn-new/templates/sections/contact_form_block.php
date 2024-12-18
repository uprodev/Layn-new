<?php

$title = get_sub_field('title');
$form = get_sub_field('form');
$background = get_sub_field('background');

?>

<section id="form" class="block-contact-form<?= $background?' bg-black':' bg-primary text-white';?>">
    <div class="container-fluid">
        <div class="block-header">
            <?php if($title): ?>
                <h2><?= $title;?></h2>
            <?php endif; ?>
            <a href="#" class="btn-to-top">
                Back to top
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M0.879661 16.5789L1.85547 17.5547L15.142 4.26815L14.1662 3.29234L0.879661 16.5789Z" fill="#6D6862" />
                        <path d="M16.6198 0.439608L3.83984 0.439609L3.83984 1.81961L16.6198 1.81961L16.6198 14.5996L17.9998 14.5996L17.9998 1.81961L17.9998 0.439608L16.6198 0.439608Z" fill="#6D6862" />
                    </g>
                </svg>
            </a>
        </div>
        <?php if($form){
            echo do_shortcode('[contact-form-7 id="'.$form.'"]');
        }?>
    </div>
</section>
