<?php
/*
 Template name: Инвентарь
 */

get_header();
?>

    <div class="container-fluid p-0">
        <h1>Inventar</h1>
        <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content-inventary', get_post_format() );

            the_post_navigation();

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </div>

<?php
get_footer();
