<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Studio_Kraft
 */

?>

<!--<article id="post---><?php //the_ID(); ?><!--" --><?php //post_class(); ?><!-- > -->
<!--	<header class="entry-header">-->
<!--		--><?php
//		if ( is_singular() ) :
//			the_title( '<h1 class="entry-title">', '</h1>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;
//
//		if ( 'post' === get_post_type() ) :
//			?>
<!--			<div class="entry-meta">-->
<!--				--><?php
//				studiokraft_posted_on();
//				studiokraft_posted_by();
//				?>
<!--			</div> .entry-meta -->
<!--		--><?php //endif; ?>
<!--	</header> .entry-header -->
<!---->
<!--	--><?php //studiokraft_post_thumbnail(); ?>
<!---->
<!--	<div class="entry-content">-->
<!--		--><?php
//		the_content( sprintf(
//			wp_kses(
//				/* translators: %s: Name of current post. Only visible to screen readers */
//				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'studiokraft' ),
//				array(
//					'span' => array(
//						'class' => array(),
//					),
//				)
//			),
//			get_the_title()
//		) );
//
//		wp_link_pages( array(
//			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'studiokraft' ),
//			'after'  => '</div>',
//		) );
//		?>
<!--	</div> .entry-content -->
<!---->
<!--	<footer class="entry-footer">-->
<!--		--><?php //studiokraft_entry_footer(); ?>
<!--	</footer> .entry-footer -->
<!--</article> #post---><?php //the_ID(); ?><!-- -->

<section class="banner-bottom-w3layouts py-3 pb-0" id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <div class="page-banner">
                <img class="img-fluid" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="page-content col-lg-8 py-4 px-5 mx-auto">

                    <?php
		if ( is_singular() ) :
			the_title( '<h3 class="page-content__title mb-3">', '</h3>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

                <p class="page-content__description mb-3">
                    <?php
                    the_content( sprintf(
                        wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                            __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'studiokraft' ),
                            array(
                                'span' => array(
                                    'class' => array(),
                                ),
                            )
                        ),
                        get_the_title()
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'studiokraft' ),
                        'after'  => '</div>',
                    ) );
                    ?>
                </p>
                <table class="table table-bordered table-hover table-responsive-sm mb-2">
                    <thead>
                    <tr>
                        <th scope="col">Будни</th>
                        <th scope="col">Выходные</th>
                        <th scope="col">Дополнительно</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>500 р/час</td>
                        <td>1000 р/час</td>
                        <td>100 р/час</td>
                    </tr>
                    </tbody>
                </table>
                <p><a href="http://ellaboranto.ru/?page_id=69" class="link-rules">Правила аренды</a></p>
            </div>
        </div>
    </div>
</section>
