<section id="side-tag">
<script>
$(function() {
	$('#side-tag .tag-list').hide();
	$('#side-tag .tag-title').removeClass('open');

	$('#side-tag .tag-title').click(function(){
		$(this).next('#side-tag .tag-list').toggle();
		$(this).toggleClass('open');
	});
});
</script>

<?php
	$tags = get_terms( 'post_tag', 'orderby=id' );
	foreach ( $tags as $tag ) :
?>
<div class="tag">
<div class="tag-title">
<p><?php echo $tag->name ?></p>
</div>
<div class="tag-list">
<ul>
<?php
		$the_query = new WP_Query( array( 'tag_id' => $tag->term_id ) );
		while ( $the_query->have_posts() ) : $the_query->the_post();
			if ( in_category( 6 ) ) :
?>
<li><a href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<div>
<figure><img src="//i.ytimg.com/vi/<?php echo post_custom( 'youtube' ); ?>/default.jpg" alt=""></figure>
<p class="post">公開日：<?php the_time( get_option( 'date_format' ) ); ?><br>
<span>詳細はこちら</span></p>
</div>
</a></li>
<?php
			elseif ( in_category( 2 ) ) :
?>
<li><a href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<p class="post"><?php the_author_meta( 'senko' ); ?> <?php the_author_meta( 'yakusyoku' ); ?> <?php the_author_meta( 'last_name' ); ?><?php the_author_meta( 'first_name' ); ?></p>
</a></li>
<?php
			else :
?>
<li><a href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3></a></li>
<?php
			endif;
		endwhile;
		wp_reset_postdata();
?>
</ul>
</div>
</div>
<?php
	endforeach;
?>

<!-- /site-tag --></section>
