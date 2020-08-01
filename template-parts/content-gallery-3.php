<?php $query = new WP_Query( array(
    'category_name'  => get_theme_mod( 'studiokraft_category_gallery' ),
    'posts_per_page' => '21',
) );
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 1 || $i === 5 || $i === 8 || $i === 11 || $i === 15 || $i === 18 ) : ?><div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img"><?php endif; ?>
        <div class="gallery_grid1 hover08<?php if ( $i === 5 || $i === 9 || $i === 15 ) { echo ' vertical'; } else { echo ' horizontal'; } ?>" data-aos="fade-up">
            <div class="gallery_effect">
                <?php// echo $i; ?>
                <a href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                    <?php if ( $i === 5 || $i === 9 || $i === 15 ) : ?>
                        <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb-vertical'); ?></figure>
                    <?php else : ?>
                        <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                    <?php endif; ?>
                </a>
            </div>
        </div>
    <?php if ( $i === 4 || $i === 7 || $i === 10 || $i === 14 || $i === 17 || $i === 21 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata(); ?>