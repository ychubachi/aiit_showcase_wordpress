<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<div id="slider">
<div id="slider-body">
<ul>
<li><a href="http://aiit.ac.jp/admission/guidance.html" target="_blank"><img src="/images/index/index_ma01.jpg" width="615" height="238" alt=""></a></li>
<!--
<li><a href="#"><img src="/images/index/index_ma02.jpg" width="615" height="238" alt=""></a></li>
<li><a href="#"><img src="/images/index/index_ma02.jpg" width="615" height="238" alt=""></a></li>
-->
</ul>
</div>
<!-- /slider --></div>
<article id="index-contentscolumn">
<section id="index-keywords" class="boxb">
<div class="titlecolumn">
<h1><a href="<?php echo get_category_link( 3 ); ?>"><img src="/images/index/index_h01.png" width="262" height="47" alt="KEYWORDS"></a></h1>
<p>AIIT教授陣が解説する、情報・産業技術の<br>
オンライン用語辞典。日々更新中。</p>
</div>
<div class="box">
<h2>最近追加された記事</h2>

<?php
	$the_query = new WP_Query( 'posts_per_page=1&cat=3' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<div class="multicolumn w584">
<?php
		$img_id = catch_that_image_id();
		if ( $img_id ) :
			$image_1 = wp_get_attachment_image_src( $img_id, 'medium' );
?>
<div class="multicolumn-left w174">
<a href="<?php the_permalink(); ?>"><img src="<?php echo $image_1[0]; ?>" width="170" alt=""></a>
</div>
<?php
		endif;
?>
<div class="multicolumn-right w395">
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<p><?php echo mb_substr( get_the_excerpt(), 0, 140 ); ?>&#046;&#046;&#046;<a href="<?php the_permalink(); ?>">続きを読む</a></p>
</div>
</div>
<?php
	endwhile;
	wp_reset_postdata();
?>

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
<p><?php echo mb_substr( get_the_excerpt(), 0, 40 ); ?>&#046;&#046;&#046;<a href="<?php the_permalink(); ?>">続きを読む</a></p></li>
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