<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="format-detection" content="telephone=no">
<meta name="description" content="「AIIT SHOWCASE」ではAIIT（産業技術大学院大学）の教員と学生による、教育と研究の活動や成果物をご紹介します。AIITはプロフェッショナル育成のための専門職大学院です。平日夜間と土曜日の授業、遠隔講義等で社会人の学びを支援します。">
<meta name="keywords" content="産業技術大学院大学,AIIT,情報アーキテクチャ専攻,創造技術専攻,専門職大学院,社会人教育,プロフェッショナル育成">
<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
<link rel="apple-touch-icon" href="/sp/apple-touch-icon.png">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="/sp/css/default.css">
<link rel="stylesheet" href="/sp/css/contents.css">
<?php if ( is_home() || is_front_page() ) : ?>
<link rel="stylesheet" href="/js/bxslider/jquery.bxslider.css">
<?php endif; ?>
<script src="/sp/js/jquery.js"></script>
<script src="/sp/js/share.js"></script>
<script src="/sp/js/smoothScroll.js"></script>
<script src="/sp/js/accordion.js"></script>
<script>
$(function() {
	$('#index-menu .menu-list').hide();
	$('#index-menu #menu-title').removeClass('open');

	$('#index-menu #menu-title').click(function(){
		$(this).next('#index-menu .menu-list').toggle();
		$(this).toggleClass('open');
	});
});
</script>
<?php if ( is_home() || is_front_page() ) : ?>
<script src="/js/bxslider/jquery.bxslider.min.js"></script>
<script>
$(function() {
	var slider = $('div#slider-body ul').bxSlider({
		auto: 'true',
		speed: 500,
		pause: (5 * 1000),
		controls: false
	});
});
</script>
<?php endif; ?>
<?php wp_deregister_script( 'jquery' ); ?>
<?php wp_head(); ?>
<?php if ( is_home() || is_front_page() ) : ?>
<?php get_sidebar( 'ad' ); ?>
<?php endif; ?>
</head>

<body id="home">
<header>
<p>産業技術大学院大学（AIIT） の活動と成果をアーカイブ・発信する</p>
<h1><a href="<?php echo home_url(); ?>"><img src="/sp/images/common/header_logo01.png" width="100%" alt="AIIT SHOWCASE"></a></h1>
</header>
