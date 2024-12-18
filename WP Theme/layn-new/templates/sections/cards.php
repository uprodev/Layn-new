<?php

$cards = get_sub_field('cards');

if($cards): ?>

    <section class="block-cards">
        <div class="container-fluid">
            <div class="row">
                <?php $order = ['col-md-8', 'col-md-4', 'col-md-4', 'col-md-8'];

                $i = 0;

                foreach ($cards as $card):
                    $class = $order[$i % count($order)];
                    $link = $card['link'];
                    if( $link ) {
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    }
                ?>

                    <div class="<?= $class;?>">
                        <a href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" class="card">
                            <?php if($card['image']): ?>
                                <figure>
                                    <img src="<?= $card['image']['url'];?>" alt="<?= $card['image']['alt'];?>" />
                                </figure>
                            <?php endif;?>
                            <div class="overlay">
                                <?php if($card['description']):?>
                                    <hr />
                                    <p><?= $card['description'];?></p>
                                <?php endif;?>
                                <span class="arrow">
                                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                      <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                      <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                                    </g>
                                  </svg>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php $i++; endforeach;?>

            </div>
        </div>
    </section>

<?php endif;