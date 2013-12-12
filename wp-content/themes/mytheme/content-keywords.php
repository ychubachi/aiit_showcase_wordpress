<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="keywords" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/index/index_h01.png" width="262" height="47" alt="KEYWORDS"></h1>
<p>AIIT教授陣が解説する、情報・産業技術の<br>
オンライン用語辞典。日々更新中。</p>
</div>
<div class="box">
<div id="keywordscolumn">
<div id="entrycolumn" class="heightLine">

<?php while ( have_posts() ) : the_post(); ?>
<!-- ▼記事<?php the_ID(); ?> -->
<article class="entry-body">
<section>
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>
<div class="entry-content">
<?php the_content(); ?>
</div>
</section>
</article>
<!-- ▲記事<?php the_ID(); ?> -->
<?php endwhile; ?>

</div>
<div id="side-keywords" class="heightLine">
<aside class="side-list">
<h2>アーカイブ</h2>
<ul>

<?php
	$the_query = new WP_Query( 'cat=3' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</aside>
<aside class="side-list">
<h2>カテゴリー</h2>
<ul>

<?php
	$cats = get_categories( 'parent=3' );
	foreach ( $cats as $val ) {
?>
<li><a href="<?php echo get_category_link( $val->term_id ); ?>"><?php echo $val->name; ?></a></li>
<?php
	}
?>

</ul>
</aside>
</div>
</div>
</div>
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