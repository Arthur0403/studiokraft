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
function debug($data){echo '<pre>';echo print_r($data, 1);echo '</pre>';}
?>
<div class="container-fluid gallery-lightbox my-5">
    <div class="row m-0">
<!--    --><?php //$query = new WP_Query( array(
//        'category_name'  => get_theme_mod( 'studiokraft_category_gallery' ),
//        'posts_per_page' => '-1',
//    ) );$query->
//$query->
//$query->
    if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
        <?php if ( $i === 1 || $i === 5 || $i === 8 || $i === 11 || $i === 15 || $i === 18 ) : ?><div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img"><?php endif; ?>
            <div class="gallery_grid1 hover08<?php if ( $i === 5 || $i === 9 || $i === 15 || $i === 20 ) { echo ' vertical'; } else { echo ' horizontal'; } ?>" data-aos="fade-up">
                <div class="gallery_effect">
                    <?php// echo $i; ?>
                    <a href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <?php if ( $i === 5 || $i === 9 || $i === 15 || $i === 20 ) : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb-vertical'); ?></figure>
                        <?php else : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        <?php if ( $i === 4 || $i === 7 || $i === 10 || $i === 14 || $i === 17 || $i === 20 ) : ?></div><?php endif; ?>
    <?php $i++; endwhile;
    the_posts_navigation( array(
        'prev_text'          => 'назад',
        'next_text'          => 'вперед',
    ) );
    endif; wp_reset_postdata(); ?>
<!--        --><?php //get_template_part( 'template-parts/content', 'gallery-2' ); ?>
<!--        --><?php //the_posts_navigation(); ?>
    </div>
</div>
<?php
get_footer();
