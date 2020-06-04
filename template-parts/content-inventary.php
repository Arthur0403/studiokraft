<?php
//$query = new WP_Query( array(
//    'category_name'  => get_theme_mod( 'studiokraft_category_inventary' ),
//) );

$page_id = get_the_ID();
$page_to_category_name = getPageId($page_id);
$cat_id = get_cat_ID($page_to_category_name);
$args = ['category' => $cat_id, 'posts_per_page' => '20'];
?>

<section class="inventary">
    <div class="container">
        <h3 class="mx-auto inventary-title">Инвентарь</h3>
        <div class="row inventary-wrapper">
            <?php
            $inventary = get_posts($args);
            foreach ($inventary as $item) : ?>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                    <a href="<?= $item -> guid; ?>" class="inventary-link">
                        <img src="<?= get_the_post_thumbnail_url($item -> ID); ?>" alt="" class="inventary-img">
                        <span class="inventary-subscribe"><?php echo $item -> post_title; ?></span>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="mx-auto col-lg-3 col-md-6 col-sm-12">
            <button class="btn btn-light custom-btn custom-btn-white more" style="font-size: 1rem">Показать все</button>
        </div>
    </div>
</section>
