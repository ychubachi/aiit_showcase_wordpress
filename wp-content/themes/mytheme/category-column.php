<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="column" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/index/index_h02.png" width="196" height="47" alt="COLUMN"></h1>
<p>閃きのヒントがそこにある。<br>
教授陣が旬の話題を交代で綴る、連載コラム。</p>
</div>
<div class="box">
<article class="entry-body">
<section>

<?php
	$the_query = new WP_Query( 'posts_per_page=1&cat=2' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<!-- ▼記事<?php the_ID(); ?> -->
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="entry-post">
<p><?php
		if ( post_custom( 'image1' ) ) :
			$image_1 = wp_get_attachment_image_src( post_custom( 'image1' ), 'thumbnail' );
?><img src="<?php echo $image_1[0]; ?>" width="40" height="40" alt="" class="vmiddle mr5"><?php
		endif;
?><?php echo post_custom( 'text1' ); ?></p>
</div>
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>
<div class="entry-content">
<?php the_content(); ?>
</div>
<!-- ▲記事<?php the_ID(); ?> -->
<?php
	endwhile;
	wp_reset_postdata();
?>

</section>
</article>
</div>
</section>
<section>
<p class="mt25"><a href="/info"><img src="/images/common/common_bn01.jpg" width="615" height="100" alt="産業技術大学院大学についてのお問い合わせ・資料請求はこちら"></a></p>
</section>
<!-- /contentscolumn --></article>
<!-- /two-maincolumn-main --></div>

<?php get_sidebar(); ?>

<!-- /two-maincolumn --></div>
<div class="ptop">
<p><a href="#home">▲ページトップに戻る</a></p>
<!-- /ptop --></div>
<!-- /maincolumn --></article>
<!-- /container --></div>

<?php get_footer(); ?>
