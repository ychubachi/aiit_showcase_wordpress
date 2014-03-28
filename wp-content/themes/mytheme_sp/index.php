<?php get_header(); ?>

<div id="slider">
<div id="slider-body">
<ul>
<li><a href="<?php echo get_category_link( 3 ); ?>"><img src="/images/index/index_ma02.jpg" width="100%" alt="KEYWORDS"></a></li>
<li><a href="<?php echo get_category_link( 2 ); ?>"><img src="/images/index/index_ma03.jpg" width="100%" alt="COLUMN"></a></li>
<li><a href="<?php echo get_category_link( 6 ); ?>"><img src="/images/index/index_ma04.jpg" width="100%" alt="CHANNEL"></a></li>
<li><a href="<?php echo home_url( 'about' ); ?>"><img src="/images/index/index_ma05.jpg" width="100%" alt="ABOUT"></a></li>
</ul>
</div>
<!-- /slider --></div>
<div id="container">
<article id="index-maincolumn">
<div id="index-menu">
<div id="menu-title">
<p><img src="/sp/images/index/index_h00.png" height="30" alt="MENU"></p>
<!-- /menu-title --></div>
<div class="menu-list">
<ul>
<li><a href="<?php echo get_category_link( 1 ); ?>">新着情報</a></li>
<li><a href="<?php echo get_category_link( 3 ); ?>">KEYWORDS</a></li>
<li><a href="<?php echo get_category_link( 2 ); ?>">COLUMN</a></li>
<li><a href="<?php echo get_category_link( 6 ); ?>">CHANNEL</a></li>
<li><a href="<?php echo home_url( 'about' ); ?>">ABOUT</a></li>
<li><a href="<?php echo home_url( 'info' ); ?>">大学からのご案内</a></li>
</ul>
</div>
<!-- /index-menu --></div>
<section id="index-news">
<div class="titlecolumn">
<h2><a href="<?php echo get_category_link( 1 ); ?>"><img src="/sp/images/index/index_h04.png" height="25" alt="新着情報"></a></h2>
</div>
<div class="box">
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=5&cat=1' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><a href="<?php the_permalink(); ?>">
<h3><?php the_time( get_option( 'date_format' ) ); ?></h3>
<p class="post"><?php the_title(); ?></p>
</a></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<section id="index-keywords">
<div class="titlecolumn">
<h2><a href="<?php echo get_category_link( 3 ); ?>"><img src="/sp/images/index/index_h01.png" height="25" alt="KEYWORDS"></a></h2>
</div>
<div class="box">
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=2&cat=3' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><a href="<?php the_permalink(); ?>">
<h3><?php the_title(); ?></h3>
<p class="post"><?php echo mb_substr( get_the_excerpt(), 0, 80 ); ?><span>...続きを読む</span></p>
</a></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<section id="index-column">
<div class="titlecolumn">
<h2><a href="<?php echo get_category_link( 2 ); ?>"><img src="/sp/images/index/index_h02.png" height="25" alt="COLUMN"></a></h2>
</div>
<div class="box">
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=2&cat=2' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><a href="<?php the_permalink(); ?>">
<div>
<figure><?php echo get_avatar( get_the_author_id(), 68 ); ?></figure>
<h3><?php the_title(); ?></h3>
<p class="post"><?php the_author_meta( 'senko' ); ?>　<?php the_author_meta( 'yakusyoku' ); ?>　<?php the_author_meta( 'last_name' ); ?> <?php the_author_meta( 'first_name' ); ?><br>
<span>...続きを読む</span></p>
</div>
</a></li>
<?php
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<section id="index-channel">
<div class="titlecolumn">
<h2><a href="<?php echo get_category_link( 6 ); ?>"><img src="/sp/images/index/index_h03.png" height="25" alt="CHANNEL"></a></h2>
</div>
<div class="box">
<ul>

<?php
	$the_query = new WP_Query( 'posts_per_page=2&cat=6' );
	while ( $the_query->have_posts() ) : $the_query->the_post();
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
	endwhile;
	wp_reset_postdata();
?>

</ul>
</div>
</section>
<!-- /index-maincolumn --></article>
<aside id="info-bn">
<ul>
<li><a href="<?php echo home_url( 'info' ); ?>"><img src="/images/common/common_bn01.jpg" width="100%" alt="産業技術大学院大学についてのお問い合せ・資料請求はこちら"></a></li>
</ul>
</aside>
<!-- /container --></div>

<?php get_footer(); ?>
