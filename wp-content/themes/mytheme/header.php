<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
<!--[if lt IE 9 ]>
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<![endif]-->
<meta name="description" content="">
<meta name="keywords" content="">
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="/css/import.css">
<script src="/js/jquery.js"></script>
<script src="/js/common.js"></script>
<!-- BEGIN: WP Social Bookmarking Light -->
<meta name="mixi-check-robots" content="noimage" />
<script type="text/javascript" src="http://connect.facebook.net/ja_JP/all.js#xfbml=1"></script>
<!-- END: WP Social Bookmarking Light -->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if (gte IE 6)&(lte IE 8)]>
<script type="text/javascript" src="/js/selectivizr.js"></script>
<![endif]-->
<?php wp_deregister_script( 'jquery' ); ?>
<?php wp_head(); ?>
</head>

<body id="home">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<header>
<div id="headercolumn">
<p>産業技術大学院大学 [AIIT] の活動・実績をアーカイブし、発信する [AIITショーケース]</p>
<h1><img src="/images/common/header_logo01.png" alt="AIITショーケース[産業技術大学院大学]" width="899" height="56" border="0" usemap="#Map"></h1>
<map name="Map">
<area shape="rect" coords="0,0,455,56" href="<?php echo home_url(); ?>">
</map>
<nav id="gnavi">
<ul>
<?php if ( is_front_page() ) : ?>
<li><a href="<?php echo home_url(); ?>"><img src="/images/common/header_nv01_on.png" width="80" height="30" alt="HOME"></a></li>
<?php else : ?>
<li><a href="<?php echo home_url(); ?>"><img src="/images/common/header_nv01.png" width="80" height="30" class="btn" alt="HOME"></a></li>
<?php endif; ?>
<?php if ( strpos( $_SERVER['REQUEST_URI'], '/keywords') !== false ) : ?>
<li><a href="<?php echo home_url( 'keywords' ); ?>"><img src="/images/common/header_nv02_on.png" width="141" height="30" alt="KEYWORDS"></a></li>
<?php else : ?>
<li><a href="<?php echo home_url( 'keywords' ); ?>"><img src="/images/common/header_nv02.png" width="141" height="30" class="btn" alt="KEYWORDS"></a></li>
<?php endif; ?>
<?php if ( strpos( $_SERVER['REQUEST_URI'], '/column') !== false ) : ?>
<li><a href="<?php echo get_category_link( 2 ); ?>"><img src="/images/common/header_nv03_on.png" width="108" height="30" alt="COLUMN"></a></li>
<?php else : ?>
<li><a href="<?php echo get_category_link( 2 ); ?>"><img src="/images/common/header_nv03.png" width="108" height="30" class="btn" alt="COLUMN"></a></li>
<?php endif; ?>
<?php if ( strpos( $_SERVER['REQUEST_URI'], '/channel') !== false ) : ?>
<li><a href="<?php echo home_url( 'channel' ); ?>"><img src="/images/common/header_nv04_on.png" width="120" height="30" alt="CHANNEL"></a></li>
<?php else : ?>
<li><a href="<?php echo home_url( 'channel' ); ?>"><img src="/images/common/header_nv04.png" width="120" height="30" class="btn" alt="CHANNEL"></a></li>
<?php endif; ?>
</ul>
</nav>

<?php get_search_form(); ?>

<!-- /headercolumn --></div>
</header>