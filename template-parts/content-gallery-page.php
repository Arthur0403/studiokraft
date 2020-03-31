<?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>
    <?php if ( $i === 1 || $i === 5 || $i === 8 || $i === 11 || $i === 15 || $i === 18 ) : ?><div class="col-md-2 col-sm-6 p-0 snap-img"><?php endif; ?>
        <div class="gallery_grid1 hover08<?php if ( $i === 5 || $i === 9 || $i === 15 || $i === 20 ) { echo ' vertical'; } else { echo ' horizontal'; } ?>" data-aos="fade-up">
            <div class="gallery_effect">
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
<?php $i++; endwhile; endif; wp_reset_postdata();
if ( $i < 5 ) : if ( $i < 5 ) : ?></div><?php endif; ?>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
<?php endif;
if ( $i > 4 && $i < 8 ) : if ( $i < 8 ) : ?></div><?php endif; ?>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
<?php endif;
if ( $i > 7 && $i < 11 ) : if ( $i < 11 ) : ?></div><?php endif; ?>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
<?php endif;
if ( $i > 10 && $i < 15 ) : if ( $i < 15 ) : ?></div><?php endif; ?>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
<?php endif;
if ( $i > 14 && $i < 18 ) : if ( $i < 18 ) : ?></div><?php endif; ?>
    <div class="col-md-2 col-sm-6 p-0 snap-img"></div>
<?php endif;
if ( $i > 17 && $i < 20 ) : ?>
    </div>
<?php endif; ?>