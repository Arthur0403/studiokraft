<?php
//$query = new WP_Query( array(
//    'category_name'  => get_theme_mod( 'studiokraft_category_inventary' ),
//) );

$page_id = get_the_ID();
$page_to_category_name = getPageId($page_id);
list($furniture, $equipment, $add_equipment) = $page_to_category_name;
$cat_id_furniture = get_cat_ID($furniture);
$cat_id_equipment = get_cat_ID($equipment);
$cat_id_add_equipment = get_cat_ID($add_equipment);
$args_for_furniture = ['category' => $cat_id_furniture, 'posts_per_page' => '20'];
$args_for_equipment = ['category' => $cat_id_equipment, 'posts_per_page' => '20'];
$args_for_add_equipment = ['category' => $cat_id_add_equipment, 'posts_per_page' => '20'];
?>

<section class="inventary">
    <div class="container">

        <div class="rules-item">
            <h3 class="content-title">Мебель и реквизит</h3>
            <div class="rules-panel card-body" style="display: none;">
                <?php
                $furniture_posts = get_posts($args_for_furniture);
                foreach ($furniture_posts as $item) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                        <a href="<?= $item -> guid; ?>" class="inventary-link">
                            <img src="<?= get_the_post_thumbnail_url($item -> ID); ?>" alt="" class="inventary-img">
                            <span class="inventary-subscribe"><?php echo $item -> post_title; ?></span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php if($page_id === 553 || $page_id === 556){ ?>

        <?php } else { ?>
            <div class="rules-item">
                <h3 class="content-title">Оборудование в зале</h3>
                <div class="rules-panel card-body" style="display: none;">
                    <?php
                    $equipment_posts = get_posts($args_for_equipment);
                    foreach ($equipment_posts as $item) : ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <a href="<?= $item -> guid; ?>" class="inventary-link">
                                <img src="<?= get_the_post_thumbnail_url($item -> ID); ?>" alt="" class="inventary-img">
                                <span class="inventary-subscribe"><?php echo $item -> post_title; ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="rules-item">
                <h3 class="content-title">Дополнительное оборудование</h3>
                <div class="rules-panel card-body" style="display: none;">
                    <?php
                    $add_equipment_posts = get_posts($args_for_add_equipment);
                    foreach ($add_equipment_posts as $item) : ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
                            <a href="<?= $item -> guid; ?>" class="inventary-link">
                                <img src="<?= get_the_post_thumbnail_url($item -> ID); ?>" alt="" class="inventary-img">
                                <span class="inventary-subscribe"><?php echo $item -> post_title; ?></span>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php } ?>
    </div>
</section>
