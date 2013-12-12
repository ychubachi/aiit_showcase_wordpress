<?php get_header(); ?>

<?php
	if ( in_category( 2 ) ) {
		get_template_part( 'content', 'column' );
	} elseif ( in_category( 3 ) ) {
		get_template_part( 'content', 'keywords' );
	} else {
		get_template_part( 'content' );
	}
?>

<?php get_footer(); ?>