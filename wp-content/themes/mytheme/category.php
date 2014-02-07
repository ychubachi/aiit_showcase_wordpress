<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">

<?php
	if ( in_category( 3 ) ) :
?>

<section id="keywords" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/index/index_h01.png" width="262" height="47" alt="KEYWORDS"></h1>
</div>
<div class="box">
<div id="keywordscolumn">
<p id="category-title">カテゴリー：<span><?php wp_title(); ?></span></p>
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>

<?php while ( have_posts() ) : the_post(); ?>
<!-- ▼記事<?php the_ID(); ?> -->
<article class="entry-body">
<section>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<div class="entry-content">
<p><?php echo mb_substr( get_the_excerpt(), 0, 140 ); ?></p>
<p class="right">...<a href="<?php the_permalink(); ?>">続きを読む</a></p>
</div>
</section>
</article>
<!-- ▲記事<?php the_ID(); ?> -->
<?php endwhile; ?>

</div>
<div class='wp-pagenavi'>
<?php if( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
</div>
</div>
</section>

<?php
	else :
?>

<section id="news" class="boxb">
<h1><img src="/images/news/news_h01.png" width="113" height="26" alt="新着情報"></h1>
<div class="box">
<dl id="news-list">

<?php while ( have_posts() ) : the_post(); ?>
<dt><?php the_time( get_option( 'date_format' ) ); ?></dt>
<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php endwhile; ?>

</dl>
<div class='wp-pagenavi'>
<?php if( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
</div>
</div>
</section>

<?php
	endif;
?>

<?php include("banner_inquiry.php"); ?>
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