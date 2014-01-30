<div id="two-maincolumn-side" class="fright">

<?php if ( in_category( 3 ) ) : ?>
<section id="side-archive">
<h1>アーカイブ</h1>
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=1000&cat=3' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
<h1>カテゴリー</h1>
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
</section>
<?php endif; ?>

<?php if ( in_category( 2 ) ) : ?>
<section id="side-archive">
<h1>アーカイブ</h1>
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=1000&cat=2' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="post"><?php echo post_custom( 'text1' ); ?></p></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
<!--<p><a href="<?php echo get_category_link( 2 ); ?>">一覧ページ</a></p>-->
</section>
<?php endif; ?>


<?php if ( in_category( 6 ) ) : ?>
<section id="side-archive">
<h1>アーカイブ</h1>
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=1000&cat=6' );
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
</section>
<?php endif; ?>

<section id="side-news" class="boxb">
<h1><img src="/images/common/side_h02.png" width="80" height="19" alt="新着情報">
</h1>
<p><a href="<?php echo get_category_link( 1 ); ?>">一覧を見る</a></p>
<div class="box">
<div id="news-box">
<dl>

<?php
	$the_query = new WP_Query( 'posts_per_page=5&cat=1' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<dt><?php the_time( get_option( 'date_format' ) ); ?></dt>
<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php
	endwhile;
	wp_reset_postdata();
?>

</dl>
</div>
</div>
</section>
<ul id="side-banner">
<li><a href="http://aiit.ac.jp/" target="_blank"><img src="/images/common/side_bn02.jpg" width="258" alt="産業技術大学院"></a></li>
</ul>
<section id="side-sns" class="boxb">
<h1><img src="/images/common/side_h01.png" width="95" height="19" alt="Facebook">
</h1>
<div class="box">
<div class="fb-like-box" data-href="https://www.facebook.com/aiit.ac.jp" data-width="254" data-height="380" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="false"></div>
</div>
</section>
<ul id="side-info">
<li><a href="<?php echo home_url( 'info' ); ?>"><img src="/images/common/side_bn01.jpg" width="258" height="220" class="btn" alt="大学からのご案内／資料請求、入試説明会の情報はこちら"></a></li>
</ul>
<!-- /two-maincolumn-side --></div>