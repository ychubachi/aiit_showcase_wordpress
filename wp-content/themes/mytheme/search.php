<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="news" class="boxb">
<h1><img src="/images/search/search_h01.png" width="113" height="26" alt="検索結果"></h1>
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