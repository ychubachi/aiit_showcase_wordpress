<?php get_header(); ?>

<?php
	$the_query = new WP_Query( 'posts_per_page=1&cat=2' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<script type="text/javascript">location.href='<?php the_permalink(); ?>';</script>
<?php
	endwhile;
	wp_reset_postdata();
?>

<?php get_footer(); ?>