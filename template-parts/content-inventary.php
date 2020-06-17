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
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Мебель и реквизит
                    </button>
                </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
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
            </div>
            <?php if($page_id === 553 || $page_id === 556){ ?>
            
            <?php } else { ?>

                <div class="card">
                <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Оборудование в зале
                    </button>
                </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
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
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Дополнительное оборудование
                    </button>
                </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
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
            </div>

            <?php } ?>
        </div>
    </div>
</section>
