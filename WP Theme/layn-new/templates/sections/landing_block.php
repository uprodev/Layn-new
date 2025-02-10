<?php

$mobile_block = get_sub_field('mobile_block');
$left = get_sub_field('left_column');
$right = get_sub_field('right_column');

$img_l = $left['image'];
$img_r = $right['image'];
$title_l = $left['title'];
$title_r = $right['title'];
$subtitle_l = $left['subtitle'];
$subtitle_r = $right['subtitle'];
$buttons_l = $left['buttons'];
$buttons_r = $right['buttons'];

?>

<section class="block-landing">

    <?php if (is_array($mobile_block) && !empty($mobile_block)): ?>
    <div class="landing-mobile d-lg-none">

        <?php if (is_array($mobile_block['links']) && !empty($mobile_block['links'])): ?>
        <div class="image">

            <?php foreach ($mobile_block['links'] as $item): ?>
              <figure>
                <?= wp_get_attachment_image($item['image']['ID'], 'full', false, array('class' => 'logo_mob')) ?>
            </figure>
        <?php endforeach ?>

    </div>
<?php endif ?>

<div class="text">

    <?php if ($mobile_block['logo']): ?>
      <div class="landing-logo">
        <?php if (pathinfo($mobile_block['logo']['url'])['extension'] == 'svg'): ?>
            <img src="<?= $mobile_block['logo']['url'] ?>" alt="<?= $mobile_block['logo']['alt'] ?>">
        <?php else: ?>
            <?= wp_get_attachment_image($mobile_block['logo']['ID'], 'full') ?>
        <?php endif ?>
    </div>
<?php endif ?>

<?php if (is_array($mobile_block['links']) && !empty($mobile_block['links'])): ?>
<ul>

    <?php foreach ($mobile_block['links'] as $item): ?>
        <li>

            <?php if ($item['button_text']): ?>
                <button type="button" class="acc-toggler"<?php if($item['data_panel']) echo ' data-panel="' . $item['data_panel'] . '"' ?>><?= $item['button_text'] ?></button>
            <?php endif ?>

            <div class="acc-collapse">

                <?php if ($item['title']): ?>
                    <h1><?= $item['title'] ?></h1>
                <?php endif ?>

                <?php if (is_array($item['links']) && !empty($item['links'])): ?>
                <div class="buttons">

                    <?php foreach ($item['links'] as $item_2): ?>
                        <?php if ($item_2['link']): ?>
                          <span>
                            <a href="<?= $item_2['link']['url'] ?>" class="btn btn-outline-white"<?php if($item_2['link']['target']) echo ' target="_blank"' ?>>
                              <span><?= html_entity_decode($item_2['link']['title']) ?></span>
                              <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><g><path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" /><path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" /></g></svg>
                          </a>
                      </span>
                  <?php endif ?>
              <?php endforeach ?>

          </div>
      <?php endif ?>

  </div>
</li>
<?php endforeach ?>

</ul>
<?php endif ?>

</div>
</div>
<?php endif ?>

<div class="landing-desktop d-none d-lg-block h-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg column column--left">
            <?php if($img_l):?>
                <div class="image"><img src="<?= $img_l['url'];?>" alt="<?= $img_l['url'];?>" /></div>
            <?php endif;?>
            <div class="text">
                <?php if($subtitle_l):?>
                    <div class="subheadline"><?= $subtitle_l;?></div>
                <?php endif;?>
                <?php if($title_l):?>
                    <h1><?= $title_l;?></h1>
                <?php endif;?>
                <?php if($buttons_l):?>
                    <div class="buttons">
                        <?php foreach($buttons_l as $btn):
                            $link = $btn['link'];

                            if( $link ):
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <span>
                                    <a class="btn btn-outline-white" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>">
                                        <span><?= esc_html($link_title); ?></span>
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                                <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                                            </g>
                                        </svg>
                                    </a>
                                </span>
                            <?php endif; ?>
                        <?php endforeach;?>
                    </div>
                <?php endif;?>
            </div>
        </div>
        <div class="col-lg column column--right">
            <?php if($img_r):?>
                <div class="image"><img src="<?= $img_r['url'];?>" alt="<?= $img_r['url'];?>" /></div>
            <?php endif;?>
            <div class="text">
                <?php if($subtitle_r):?>
                    <div class="subheadline"><?= $subtitle_r;?></div>
                <?php endif;?>
                <?php if($title_r):?>
                    <h1><?= $title_r;?></h1>
                <?php endif;?>
                <?php if($buttons_r):?>
                    <div class="buttons">
                        <?php foreach($buttons_r as $btnr):
                            $linkr = $btnr['link'];

                            if( $linkr ):
                                $linkr_url = $linkr['url'];
                                $linkr_title = $linkr['title'];
                                $linkr_target = $linkr['target'] ? $linkr['target'] : '_self';
                                ?>
                                <span>
                                    <a class="btn btn-outline-white" href="<?= esc_url($linkr_url); ?>" target="<?= esc_attr
                                    ($linkr_target); ?>">
                                    <span><?= esc_html($linkr_title); ?></span>
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M1.85862 0.443138L0.882812 1.41895L14.1693 14.7055L15.1452 13.7297L1.85862 0.443138Z" fill="white" />
                                            <path d="M17.9998 16.1804V3.40039H16.6198V16.1804H3.83984V17.5604H16.6198H17.9998V16.1804Z" fill="white" />
                                        </g>
                                    </svg>
                                </a>
                            </span>
                        <?php endif; ?>
                    <?php endforeach;?>
                </div>
            <?php endif;?>
        </div>
    </div>
</div>
</div>
</div>
</section>
