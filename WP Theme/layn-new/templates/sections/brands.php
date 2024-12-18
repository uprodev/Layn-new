<?php

$brands = get_sub_field('brands');

if($brands):
?>

    <section class="block-brands bg-black">
        <div class="container-fluid">
            <ul class="row">
                
                <?php foreach( $brands as $im ): ?>
                    <li>
                        <figure><img src="<?= $im['url'];?>" alt="<?= $im['alt'];?>"></figure>
                    </li>

                <?php endforeach;?>

            </ul>
        </div>
    </section>

<?php endif;