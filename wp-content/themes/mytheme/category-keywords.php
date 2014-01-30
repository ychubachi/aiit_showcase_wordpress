<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="keywords" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/index/index_h01.png" width="262" height="47" alt="KEYWORDS"></h1>
<p>AIIT教授陣が解説する、産業技術の<br>
オンライン用語辞典。日々更新中。</p>
</div>
<div class="box">
<div id="keywordscolumn">

<?php
	$the_query = new WP_Query( 'posts_per_page=1&cat=3' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
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
<?php
	endwhile;
	wp_reset_postdata();
?>

</div>
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