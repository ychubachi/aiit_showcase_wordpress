<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<div id="slider">
<div id="slider-body">
<ul>
<!--<li><a href="http://aiit.ac.jp/admission/guidance.html" target="_blank"><img src="/images/index/index_ma01.jpg" width="615" height="238" alt="特別講演会・入試説明会"></a></li>-->
<li><a href="<?php echo get_category_link( 3 ); ?>"><img src="/images/index/index_ma02.jpg" width="615" height="238" alt="KEYWORDS"></a></li>
<li><a href="<?php echo get_category_link( 2 ); ?>"><img src="/images/index/index_ma03.jpg" width="615" height="238" alt="COLUMN"></a></li>
<li><a href="<?php echo get_category_link( 6 ); ?>"><img src="/images/index/index_ma04.jpg" width="615" height="238" alt="CHANNEL"></a></li>
<!--<li><img src="/images/index/index_ma05.jpg" width="615" height="238" alt="ABOUT"></li>-->
</ul>
</div>
<!-- /slider --></div>
<article id="index-contentscolumn">
<section id="index-keywords" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo get_category_link( 3 ); ?>"><img src="/images/index/index_h01.png" width="262" height="47" alt="KEYWORDS"></a></h1>
<p>AIIT教授陣が解説する、産業技術の<br>
オンライン用語辞典。日々更新中。</p>
</div>
<div class="box">
<ul class="heightLineParent">

<?php
	$the_query = new WP_Query( 'posts_per_page=2&cat=3' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="post"><?php echo mb_substr( get_the_excerpt(), 0, 80 ); ?>&#046;&#046;&#046;<a href="<?php the_permalink(); ?>">続きを読む</a></p>
</li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<section id="index-column" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo get_category_link( 2 ); ?>"><img src="/images/index/index_h02.png" width="196" height="47" alt="COLUMN"></a></h1>
<p>閃きのヒントがそこにある。<br>
教授陣が旬の話題を交代で綴る、連載コラム。</p>
</div>
<div class="box">

<?php
	$the_query = new WP_Query( 'posts_per_page=1&cat=2' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<div class="multicolumn w584">
<div class="multicolumn-left w395">
<p><?php echo mb_substr( get_the_excerpt(), 0, 120 ); ?>&#046;&#046;&#046;<a href="<?php the_permalink(); ?>">続きを読む</a></p>
</div>
<div class="multicolumn-right w150">
<?php
		if ( post_custom( 'image1' ) ) :
			$image_1 = wp_get_attachment_image_src( post_custom( 'image1' ), 'thumbnail' );
?>
<p class="center"><img src="<?php echo $image_1[0]; ?>" width="88" height="88" alt=""></p>
<?php
		endif;
?>
<p><?php echo post_custom( 'text1' ); ?></p>
</div>
</div>
<?php
	endwhile;
	wp_reset_postdata();
?>

</div>
</section>
<section id="index-channel" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo home_url( 'channel' ); ?>"><img src="/images/index/index_h03.png" width="220" height="47" alt="CHANNEL"></a></h1>
<p>AIITのリアルを知る。<br>
動画で観る学びの現場。</p>
</div>
<div class="box">
<ul class="heightLineParent">

<?php
	$the_query = new WP_Query( 'posts_per_page=2&cat=6' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<div class="multicolumn w276 mt5">
<div class="multicolumn-left w120">
<?php if ( post_custom( 'youtube' ) ) : ?>
<a href="<?php the_permalink(); ?>"><img src="//i.ytimg.com/vi/<?php echo post_custom( 'youtube' ); ?>/default.jpg" width="120" height="90" alt=""></a>
<?php endif; ?>
</div>
<div class="multicolumn-right w146">
<p>公開日：<br>
<?php the_time( get_option( 'date_format' ) ); ?><br>
<a href="<?php the_permalink(); ?>">詳細はこちら</a></p>
</div>
</div>
</li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<?php include("banner_inquiry.php"); ?>
</article>
<!-- /two-maincolumn-main --></div>

<?php get_sidebar(); ?>

<!-- /two-maincolumn --></div>
<!-- /maincolumn --></article>
<!-- /container --></div>

<?php get_footer(); ?>