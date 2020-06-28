<?php
/*
Template Name: Цены
*/
?>

<?php
get_header();
?>

    <section class="py-0 pb-0 container pages">
        <div class="row">
            <div class="page-content col-lg-12 py-4 px-5 mx-auto">
                <h1 class="ta-center"><?php the_title(); ?></h1>
            </div>
            <div class="page-content col-lg-12 py-4 px-5 mx-auto container--rules">
                    <?php if ( have_posts() ) : while ( have_posts() ) :
                        the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                    <?php else : ?>
                        404
                    <?php endif ?>
                <div class="rules">
                <?php $price = get_field( 'group-services' );
                    foreach ( $price as $innerPrice ): ?>
                    <div class="rules-item">
                        <h3 class="content-title"><?php echo $innerPrice[ 'title' ]; ?></h3>
                        <?php if ( $innerPrice[ 'title' ] !== 'Дополнительное оборудование') : ?>
                            <div class="rules-panel">
                            <?php echo $innerPrice[ 'text' ]; ?>
                            <?php if ( $innerPrice[ 'category' ] ) : ?>
                                <div class="row">
                                <?php $query = new WP_Query( array(
                                    'category_name'  => $innerPrice[ 'category' ],
                                    'posts_per_page' => '1000',
                                    'order' => 'ASC',
                                    ) );
                                    if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
                                        <a  class="col-lg-3 col-md-4 col-sm-12 mb-4" href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                                             <figure><?php echo get_the_post_thumbnail( $post->ID, 'square', array('class' => 'lazyloaded') ); ?></figure>
                                        </a>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    404
                                <?php endif;
                                wp_reset_postdata(); ?>
                                </div>
                            <?php endif; ?>
                            </div>
                        <?php else : ?>
                            <div class="rules-panel">
                            <?php if ( $innerPrice[ 'category' ] ) : ?>
                            <?php $query = new WP_Query( array(
                                'category_name'  => $innerPrice[ 'category' ],
                                'posts_per_page' => '1000',
                                'order' => 'ASC',
                                ) );
                                if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
                                <?php echo $innerPrice[ 'text_' . $i++ ]; ?>
                                <div class="row">
                                    <a  class="offset-md-4 offset-lg-5 col-lg-3 col-md-4 col-sm-12 mb-4" href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                                         <figure><?php echo get_the_post_thumbnail( $post->ID, 'square', array('class' => 'lazyloaded') ); ?></figure>
                                    </a>
                                </div>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    404
                                <?php endif;
                                wp_reset_postdata(); ?>
                            <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
                </div>
                <div>
                    <?php the_field( 'final-text' ); ?>
                </div>
            </div>
    </section>

<?php
get_footer();
?>