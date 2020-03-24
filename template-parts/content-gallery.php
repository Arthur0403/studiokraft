<?php $query = new WP_Query( array(
    'category_name'  => get_theme_mod( 'studiokraft_category_gallery' ),
    'posts_per_page' => '20',
) );
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 1 ) : ?><div class="col-md-2 col-sm-4 p-0 snap-img"><?php endif; ?>
        <? if ( $i === 1 || $i === 7 || $i === 11 || $i === 16 ) : ?>
            <div class="gallery_grid1 horizontal hover08" data-aos="fade-up">
                <div class="gallery_effect">
                    <a href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php if ( $i === 16 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata();
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 2 ) : ?><div class="col-md-2 col-sm-4 p-0 snap-img"><?php endif; ?>
        <? if ( $i === 2 || $i === 12 || $i === 17 ) : ?>
            <div class="gallery_grid1 hover08<?php if ( $i === 2 ) { echo ' vertical'; } else { echo ' horizontal'; } ?>" data-aos="fade-up">
                <div class="gallery_effect">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <?php if ( $i === 2 ) : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb-vertical'); ?></figure>
                        <?php else : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php if ( $i === 17 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata();
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 3 ) : ?><div class="col-md-2 col-sm-4 p-0 snap-img"><?php endif; ?>
        <? if ( $i === 3 || $i === 8 || $i === 18 ) : ?>
            <div class="gallery_grid1 hover08<?php if ( $i === 8 ) { echo ' vertical'; } else { echo ' horizontal'; } ?>" data-aos="fade-up">
                <div class="gallery_effect">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <?php if ( $i === 8 ) : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb-vertical'); ?></figure>
                        <?php else : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php if ( $i === 18 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata();
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 4 ) : ?><div class="col-md-2 col-sm-4 p-0 snap-img"><?php endif; ?>
        <? if ( $i === 4 || $i === 9 || $i === 13 || $i === 19 ) : ?>
            <div class="gallery_grid1 horizontal hover08" data-aos="fade-up">
                <div class="gallery_effect">
                    <a href="<? echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php if ( $i === 19 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata();
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 5 ) : ?><div class="col-md-2 col-sm-4 p-0 snap-img"><?php endif; ?>
        <? if ( $i === 5 || $i === 14 || $i === 20 ) : ?>
            <div class="gallery_grid1 hover08<?php if ( $i === 5 ) { echo ' vertical'; } else { echo ' horizontal'; } ?>" data-aos="fade-up">
                <div class="gallery_effect">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <?php if ( $i === 5 ) : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb-vertical'); ?></figure>
                        <?php else : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php if ( $i === 20 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata();
if ( $query->have_posts() ) : $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
    <?php if ( $i === 6 ) : ?><div class="col-md-2 col-sm-4 p-0 snap-img"><?php endif; ?>
        <? if ( $i === 6 || $i === 10 || $i === 15 || $i === 15 ) : ?>
            <div class="gallery_grid1 horizontal hover08" data-aos="fade-up">
                <div class="gallery_effect">
                    <a href="<?php echo get_the_post_thumbnail_url(); ?>" data-lightbox="example-set" data-title-wthree="<?php the_title(); ?>">
                        <?php if ( $i === 15 ) : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb-vertical'); ?></figure>
                        <?php else : ?>
                            <figure><?php echo get_the_post_thumbnail($post->ID, 'gallery-thumb'); ?></figure>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    <?php if ( $i === 15 ) : ?></div><?php endif; ?>
<?php $i++; endwhile; endif; wp_reset_postdata(); ?>