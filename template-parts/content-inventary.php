<?php
//$query = new WP_Query( array(
//    'category_name'  => get_theme_mod( 'studiokraft_category_inventary' ),
//) );
$cat_id = get_cat_ID('Инвентарь');
$args = ['category' => $cat_id];
?>

<section class="mb-4 inventary">
    <div class="container">
        <h3 class="my-4 mx-auto inventary-title">Инвентарь</h3>
        <div class="row">
            <?php
            $inventary = get_posts($args);
            foreach ($inventary as $item) : ?>
                <div class="col col-lg-3 col-md-6 col-sm-12 mb-3">
                    <a href="<?= $item -> guid; ?>">
                        <img src="<?= get_the_post_thumbnail_url($item -> ID); ?>" alt="" class="inventary-img">
                        <span class="inventary-subscribe"><?php echo $item -> post_title; ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>