<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
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
<section id="news">
<h1><img src="/sp/images/contents/news_h01.png" height="25" alt="新着情報"></h1>
<div class="box">
<dl id="news-list">

<?php while ( have_posts() ) : the_post(); ?>
<dt><?php the_time( get_option( 'date_format' ) ); ?></dt>
<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
<?php endwhile; ?>

</dl>

<!-- ▼SNS -->
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>
<!-- ▲SNS -->

<div class='wp-pagenavi'>
<?php if( function_exists( 'wp_pagenavi' ) ) wp_pagenavi(); ?>
</div>

<!-- /box --></div>
<!-- /news --></section>
<!-- /maincolumn --></article>
<aside id="info-bn">
<ul>
<li><a href="<?php echo home_url( 'info' ); ?>"><img src="/images/common/common_bn01.jpg" width="100%" alt="産業技術大学院大学についてのお問い合せ・資料請求はこちら"></a></li>
</ul>
</aside>
<!-- /container --></div>

<?php get_footer(); ?>
