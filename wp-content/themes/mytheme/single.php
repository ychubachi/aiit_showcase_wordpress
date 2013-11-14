<?php get_header(); ?>

<?php
	if ( in_category( 2 ) ) {
		get_template_part( 'content', 'column' );
	} else {
		get_template_part( 'content' );
	}
?>

<?php get_footer(); ?>