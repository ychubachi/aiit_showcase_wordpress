<?php get_header(); ?>

<div id="container">
<article id="maincolumn">
<div id="two-maincolumn">
<div id="two-maincolumn-main" class="fleft">
<article id="contentscolumn">
<section id="about" class="boxb">
<div class="titlecolumn">
<h1><img src="/images/about/about_h01.png" width="166" height="47" alt="CHANNEL"></h1>
<p><br>
AIIT SHOWCASEについて</p>
</div>
<div class="box">
<h2>AIIT SHOWCASEとは</h2>
<p><img src="/images/about/about_ph01.jpg" width="574" height="167" alt=""></p>

<?php while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<ul>
<li><img src="/images/about/about_ph02.jpg" width="187" height="125" alt="産業技術大学院大学　校舎"><br>
産業技術大学院大学　校舎</li>
<li><img src="/images/about/about_ph03.jpg" width="186" height="125" alt="授業の様子（情報アーキテクチャ専攻）"><br>
授業の様子（情報アーキテクチャ専攻）</li>
<li><img src="/images/about/about_ph04.jpg" width="186" height="125" alt="授業の様子（創造技術専攻）"><br>
授業の様子（創造技術専攻）</li>
</ul>
<!-- ▼SNS -->
<div class="sns-btn">
<?php if( function_exists( 'wp_social_bookmarking_light_output_e' ) ) wp_social_bookmarking_light_output_e( null, get_permalink(), get_the_title() ); ?>
</div>
<!-- ▲SNS -->
</div>
</section>
<!-- /contentscolumn --></article>
<!-- /two-maincolumn-main --></div>

<?php get_sidebar(); ?>

<!-- /two-maincolumn --></div>
<!-- /maincolumn --></article>
<!-- /container --></div>

<?php get_footer(); ?>
