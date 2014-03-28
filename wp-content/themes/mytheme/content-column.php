<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="column" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/index/index_h02.png" width="196" height="47" alt="COLUMN"></h1>
<p>閃きのヒントがそこにある。<br>
教授陣が旬の話題を交代で綴る、連載コラム。</p>
</div>
<div class="box">
<article class="entry-body">
<section>

<?php while ( have_posts() ) : the_post(); ?>
<!-- ▼記事<?php the_ID(); ?> -->
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="entry-post">
<p><?php echo get_avatar( get_the_author_id(), 40 ); ?>
 <?php the_author_meta( 'senko' ); ?> <?php the_author_meta( 'yakusyoku' ); ?> <?php the_author_meta( 'last_name' ); ?><?php the_author_meta( 'first_name' ); ?></p>
</div>
<div class="entry-content">
<?php the_content(); ?>
</div>
<!-- ▲記事<?php the_ID(); ?> -->
<?php endwhile; ?>

</section>
</article>
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>

<?php echo do_shortcode('[fbcomments]'); ?>

<div id="nav-below" class="navigation">
<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&lt;</span>&nbsp;prev&nbsp;', true ); ?></span>|<span class="nav-next"><?php next_post_link( '%link', '&nbsp;next&nbsp;<span class="meta-nav">&gt;</span>', true ); ?></span>
<!-- /nav-below --></div>
</div>
</section>
<?php include("banner_inquiry.php"); ?>
<!-- /contentscolumn --></article>
<!-- /two-maincolumn-main --></div>

<?php get_sidebar( 'cat' ); ?>

<!-- /two-maincolumn --></div>
<!-- /maincolumn --></article>
<!-- /container --></div>
