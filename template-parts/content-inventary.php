<?php
$query = new WP_Query( array(
    'category_name'  => get_theme_mod( 'studiokraft_category_inventary' ),
) );
?>

<!--<pre>-->
<?php //var_dump($query); ?>
<!--</pre>-->