<?php

get_header();

$video = get_field('video2');
$description = get_field('description');
$button_sound = get_field('video_sound2');
$news_description = get_field('news_description');
$default_news = get_field('default_news');
$news = get_field('news');
$i = 1;

$title_products = get_field('title_products');

?>

    <section class="block-landing">
        <div class="column column--left">
            <div class="image"><img src="images/landing-left.jpg" alt="" /></div>
            <div class="text">
                <div class="subheadline">LAYN Creative</div>
                <h1>Creating with Creatives</h1>
                <div class="buttons">
                    <a href="creative.html" class="btn btn-outline-white">
                        <span>See more</span>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                            </g>
                        </svg>
                    </a>
                    <a href="creative.html#form" class="btn btn-outline-white">
                        <span>Get in touch</span>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="column column--right">
            <div class="image"><img src="images/landing-right.jpg" alt="" /></div>
            <div class="text">
                <div class="subheadline">LAYN Assembly</div>
                <h1>Empowering freelancers</h1>
                <div class="buttons">
                    <a href="assembly.html" class="btn btn-outline-white">
                        <span>See more</span>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                            </g>
                        </svg>
                    </a>
                    <a href="assembly.html#form" class="btn btn-outline-white">
                        <span>Get in touch</span>
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();
