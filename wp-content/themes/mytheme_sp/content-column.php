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
<section id="column">
<div class="titlecolumn">
<h1><img src="/sp/images/contents/column_h01.png" height="25" alt="COLUMN"></h1>
<p>閃きのヒントがそこにある。<br>
教授陣が旬の話題を交代で綴る、連載コラム。</p>
</div>
<div class="box">

<?php while ( have_posts() ) : the_post(); ?>
<!-- ▼記事<?php the_ID(); ?> -->
<article class="entry-body">
<section>
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="entry-post">
<figure><?php echo get_avatar( get_the_author_id(), 68 ); ?></figure>
<p><?php the_author_meta( 'senko' ); ?>　<?php the_author_meta( 'yakusyoku' ); ?>　<?php the_author_meta( 'last_name' ); ?> <?php the_author_meta( 'first_name' ); ?><p>
</div>
<div class="entry-content">
<?php the_content(); ?>
</div>
</section>
</article>
<!-- ▲記事<?php the_ID(); ?> -->
<?php endwhile; ?>

<!-- ▼SNS -->
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>
<!-- ▲SNS -->

<div id="nav-below" class="navigation">
<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&lt;</span>&nbsp;prev&nbsp;', true ); ?></span>|<span class="nav-next"><?php next_post_link( '%link', '&nbsp;next&nbsp;<span class="meta-nav">&gt;</span>', true ); ?></span>
<!-- /nav-below --></div>

<!-- /box --></div>
<!-- /column --></section>

<?php get_sidebar( 'cat' ); ?>

<!-- /maincolumn --></article>
<aside id="info-bn">
<ul>
<li><a href="<?php echo home_url( 'info' ); ?>"><img src="/images/common/common_bn01.jpg" width="100%" alt="産業技術大学院大学についてのお問い合せ・資料請求はこちら"></a></li>
</ul>
</aside>
<!-- /container --></div>
