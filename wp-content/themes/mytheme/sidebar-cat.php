<div id="two-maincolumn-side" class="fright">
<ul id="side-banner">
<li><a href="http://aiit.ac.jp/" target="_blank"><img src="/images/common/side_bn02.jpg" width="258" alt="産業技術大学院"></a></li>
</ul>

<?php if ( !in_category( 1 ) ) : ?>

<section id="side-tag">
<script>
$(function() {
    $('#side-tag .tag-list').hide();
    $('#side-tag .tag-title').removeClass('open');

    $('#side-tag .tag-title').click(function(){
        $(this).next('#side-tag .tag-list').toggle();
        $(this).toggleClass('open');
    });
});
</script>

<?php
    $tags = get_terms( 'post_tag', 'orderby=id' );
    foreach ( $tags as $tag ) :
?>
<div class="tag">
<div class="tag-title">
<p><?php echo $tag->name ?></p>
</div>
<div class="tag-list">
<ul>
<?php
        $the_query = new WP_Query( array( 'tag_id' => $tag->term_id ) );
        while ( $the_query->have_posts() ) : $the_query->the_post();
            if ( in_category( 6 ) ) :
?>
<li>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<div class="multicolumn w276 mt5">
<div class="multicolumn-left w120" style="width:160px;height:90px;overflow:hidden">
<?php if ( post_custom( 'youtube' ) ) : ?>
<a href="<?php the_permalink(); ?>"><img src="//i.ytimg.com/vi/<?php echo post_custom( 'youtube' ); ?>/default.jpg" width="160" height="120" alt="" style="margin-top:-15px"></a>
<?php endif; ?>
</div>
<div class="multicolumn-right w146" style="width:106px">
<p>公開日：<br>
<?php the_time( get_option( 'date_format' ) ); ?><br>
<a href="<?php the_permalink(); ?>">詳細はこちら</a></p>
</div>
</div>
</li>
<?php
            elseif ( in_category( 2 ) ) :
?>
<li><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<p class="post"><?php the_author_meta( 'senko' ); ?> <?php the_author_meta( 'yakusyoku' ); ?> <?php the_author_meta( 'last_name' ); ?><?php the_author_meta( 'first_name' ); ?></p></li>
<?php
            else :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
            endif;
        endwhile;
        wp_reset_postdata();
?>
</ul>
</div>
</div>
<?php
    endforeach;
?>

</section>

<?php endif; ?>

<?php if ( in_category( 1 ) ) : ?>
<section id="side-archive">
<h1>アーカイブ</h1>
<ul>

<?php
    $the_query = new WP_Query( 'posts_per_page=1000&cat=1' );
    while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
    endwhile;
    wp_reset_postdata();
?>

</ul>
</section>
<?php endif; ?>

<!-- /two-maincolumn-side --></div>