<?php
/**
 * The gallery template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Kraft
 */

get_header();

?>

    <section class="gallery">
        <div class="container">
            <div class="gallery-title-wrap">
                <h3 class="tittle gallery-title">Галерея</h3>
                <div class="black-border mb-4"></div>
            </div>
            <div class="row m-0 gallery_new">
                <?php //get_template_part( 'template-parts/content', 'gallery-page' ); /*thumbnail*/ ?>
                <?php $query = new WP_Query( array(
                    'category_name'  => 'gallery',
                    'posts_per_page' => '5000',
                    ) );
                    if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
                        <a class="col-lg-2 col-md-3 col-sm-6" href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                             <figure><?php echo get_the_post_thumbnail( $post->ID, 'square', array('class' => 'lazyloaded') ); ?></figure>
                        </a>
                    <?php endwhile; endif;
                wp_reset_postdata(); ?>
            </div>

<!--                --><?php //the_posts_pagination( array(
//                    'end_size' => 1,
//                    'mid_size' => 1,
//                    'type'     => 'list',
//                ) ); ?>
            </div>
        </div>
    </section>

<?php
get_footer();
