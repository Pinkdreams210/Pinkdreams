<!doctype html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>
            <?php wp_title( '|', true, 'right' ); ?>
            <?php bloginfo('name'); ?>
            </title>
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
            <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">s
<meta name="keywords" content="chan, drap, thang loi, cotton, tui xach, balo, ba lo, giay dep, quan ao, nu trang, phu kien thoi trang, ..." />
<meta name="description" content="Pinkdreams Shop - Shop Online chuyên kinh doanh chăn drap, túi xách, ba lô, giày dép, quần áo, nữ trang, phụ kiện thời trang, ..." />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=2.0, initial-scale=1.0, user-scalable=yes">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link  href="<?php bloginfo('stylesheet_directory'); ?>/css/styles.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('stylesheet_directory'); ?>/css/menu.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Poiret+One | Lobster" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lobster&subset=latin,vietnamese" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css" rel="stylesheet" type="text/css" />
<link  href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/lightbox.css" media="screen" />
	<?php wp_head(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/submenu.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bxslider.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/menu.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/lightbox.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.scroll.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/rollover.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
	  mode: "fade",
	  pager: false,
	  controls: false,
	  auto: true,
	  speed: 2000
});
});
</script>
<script type="text/javascript">
			$(function() {

				var $c = $('#carousel'),
					$w = $(window);

		var windowWidth = $('.caroufredsel_wrapper').width();
				$c.carouFredSel({
					align: false,
					items: 6,		
					scroll: {
						items: 1,
						duration: 14000,
						timeoutDuration: 0,
						easing: 'linear',
						pauseOnHover: 'immediate'
					}
				});
			});
		</script>
        
        
<!--[if lt IE 9]>
<script src="js/IE9.js"></script>
<![endif]-->
<!-- Start Google Analytics -->
<!-- End Google Analytics -->
</head>

<body id="index" <?php body_class(); ?>>
<div id="wrapper">
  <div id="header" class="clearfix">
    <div class="header01">
      <div class="info-header">
        <h1>Welcome to Pinkdreams Shop</h1>
        <div class="info_R">
          <ul class="h-htro clearfix">
            <li class="tt"><a href="thanhtoan.html"><span class="icons payment-icon"></span><span class="txt-link">Thanh Toán</span></a></li>
            <li class="ht"><a href="hotro.html"><span class="icons support-icon"></span><span class="txt-link">Hỗ Trợ </span></a></li>
            <li class="sm"><a href="sitemap.html"><span class="icons sitemap-icon"></span><span class="txt-link">Sitemap</span></a></li>
          </ul>
          <p class="image-r"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/h1_phone.png" alt="0938 415 563 - 0909 088 210" /></p>
        </div>
      </div>
      <div id="menu">
        <div class="info-menu">
          <p class="logo"><a href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" alt="Pinkdreams Shop Online"></a></p>
          <div id="cssmenu">
            <ul class="list-menu">
            <li class="home"><a href="index.html">Trang Chủ<br /><span>Home</span></a></li>
            <li class="active produce"><a href="#">Sản Phẩm<br /><span>Product</span></a>              
                <ul>
                  <li class="drap"><a href="drap/index.html">Chăn Drap</a></li>
                  <li class="bag"><a href="bag/index.html">Túi Xách</a></li>
                  <li class="shoe"><a href="shoes/index.html">Giày Dép</a></li>
                  <li class="clothe"><a href="clothes/index.html">Quần Áo</a></li>
                  <li class="jewelry"><a href="jewelry/index.html">Nữ Trang</a></li>
                  <li class="phukien"><a href="fittings/index.html">Phụ Kiện</a></li>
                </ul>           
            </li>
            <li class="active service"><a href="#">Dịch Vụ <br /><span>Service</span></a>       
                <ul>
                  <li class="tuvan"><a href="tuvan.html">Tư Vấn</a></li>
                  <li class="banggia"><a href="banggia.html">Bảng Giá</a></li>
                  <li class="dathang"><a href="order.html">Đặt Hàng</a></li>
                  <li class="thanhtoan"><a href="thanhtoan.html">Thanh Toán</a></li>
                  <li class="giaohang"><a href="giaohang.html">Giao Hàng</a></li>
                </ul>
            </li>
            <li class="sale-off"><a href="khuyenmai.html">Khuyến Mãi <br /><span>Sale Off</span></a></li>
            <li class="contact"><a href="lienhe.html">Liên hệ <br /><span>Contact</span></a></li>
          </ul>
            </div>
        </div>
      </div>
      
    </div>
    <div class="slider_img">
      <ul class="bxslider">
        <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/main_01.jpg" alt="Chăn Drap" /></li>
        <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/main_03.jpg" alt="Giày Dép" /></li>
        <li><img src="<?php bloginfo('stylesheet_directory'); ?>/images/main_05.jpg" alt="Nữ Trang" /></li>
      </ul>
    </div>
    
    <div id="navi" class="clearfix">
      <ul>
        <li><a class="home" href="index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi01.png" alt="Trang Chủ" /><span class="navi01">Trang Chủ</span></a></li>
        <li><a class="home" href="drap/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi02.png" alt="Chăn Drap" /><span class="navi02">Chăn Drap</span></a></li>
        <li><a class="home" href="bag/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi03.png" alt="Túi Xách" /><span class="navi01">Túi Xách</span></a></li>
        <li><a class="home" href="shoes/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi04.png" alt="Giày Dép" /><span class="navi02">Giày Dép</span></a></li>
        <li><a class="home" href="clothes/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi05.png" alt="Quần Áo" /><span class="navi01">Quần Áo</span></a></li>
        <li><a class="home" href="jewelry/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi06.png" alt="Nữ Trang" /><span class="navi02">Nữ Trang</span></a></li>
        <li><a class="home" href="fittings/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi07.png" alt="Phụ Kiện" /><span class="navi01">Phụ Kiện</span></a></li>
      </ul>
    </div>
    <div class="s-navi clearfix">
      <ul>
        <li><a href="drap/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi_sp01.png" alt="Chăn Drap" /></a></li>
        <li><a href="bag/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi_sp02.png" alt="Túi Xách" /></a></li>
        <li><a href="shoes/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi_sp03.png" alt="Giày Dép" /></a></li>
        <li><a href="clothes/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi_sp04.png" alt="Quần Áo" /></a></li>
        <li><a href="jewelry/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi_sp05.png" alt="Nữ Trang" /></a></li>
        <li><a href="fittings/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/navi_sp06.png" alt="Phụ Kiện" /></a></li>
      </ul>
    </div>
  </div>
  <!--/header-->