<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="channel" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/index/index_h03.png" width="220" height="47" alt="CHANNEL"></h1>
</div>
<div class="box">

<?php while ( have_posts() ) : the_post(); ?>
<!-- ▼記事<?php the_ID(); ?> -->
<article class="entry-body">
<section>
<h2 class="entry-title"><?php the_title(); ?></h2>
<div class="entry-content">
<p>公開日: <?php the_time( get_option( 'date_format' ) ); ?></p>
<?php if ( post_custom( 'youtube' ) ) : ?>
<iframe width="576" height="324" src="//www.youtube.com/embed/<?php echo post_custom( 'youtube' ); ?>" frameborder="0" allowfullscreen></iframe>
<?php endif; ?>
<div class="mt15">
<?php the_content(); ?>
</div>
</div>
</section>
</article>
<!-- ▲記事<?php the_ID(); ?> -->
<?php endwhile; ?>

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
