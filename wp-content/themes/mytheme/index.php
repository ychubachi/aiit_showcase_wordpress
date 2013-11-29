<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<div id="slider">
<ul id="slider-body">
<li><a href="http://aiit.ac.jp/admission/guidance.html" target="_blank"><img src="/images/index/index_ma01.jpg" width="615" height="238" alt=""></a></li>
</ul>
<!-- /slider --></div>
<article id="index-contentscolumn">
<section id="index-keywords" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo home_url( 'keywords' ); ?>"><img src="/images/index/index_h01.png" width="262" height="47" alt="KEYWORDS"></a></h1>
<p>&nbsp;</p>
</div>
<div class="box">
<h2>最近追加された記事</h2>
<p class="comingsoon">COMING SOON</p>
</div>
</section>
<section id="index-column" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo get_category_link( 2 ); ?>"><img src="/images/index/index_h02.png" width="196" height="47" alt="COLUMN"></a></h1>
<p>AIIT教授陣が交代で綴る日々のことこそ、<br>
閃きのヒントかもしれない。教員連載コラム</p>
</div>
<div class="box">
<h2>最近追加された記事</h2>
<ul class="heightLineParent">

<?php
	$the_query = new WP_Query( 'posts_per_page=2&cat=2' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p class="post"><?php echo post_custom( 'text1' ); ?>
<p>
<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>">続きを読む</a></p></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<section id="index-channel" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo home_url( 'channel' ); ?>"><img src="/images/index/index_h03.png" width="220" height="47" alt="CHANNEL"></a></h1>
<p>AIITのリアルを知る。<br>
動画で観る学びの現場。</p>
</div>
<div class="box">
<h2>最近追加された記事</h2>
<ul class="heightLineParent">
<li>
<h3><a href="http://youtu.be/tmBZg9_IFNA" target="_blank">入試説明会（2012.12月実施）</a></h3>
<div class="multicolumn w276 mt5">
<div class="multicolumn-left w120"> <a href="http://youtu.be/tmBZg9_IFNA" target="_blank"><img src="/images/index/index_ph01.jpg" width="120" height="67" alt=""></a></div>
<div class="multicolumn-right w146">
<p>公開日：<br>
2013/01/21<br>
<a href="http://youtu.be/tmBZg9_IFNA" target="_blank">動画を見る</a></p>
</div>
</div>
</li>
</ul>
</div>
</section>
</article>
<!-- /two-maincolumn-main --></div>

<?php get_sidebar(); ?>

<!-- /two-maincolumn --></div>
<!-- /maincolumn --></article>
<!-- /container --></div>

<?php get_footer(); ?>