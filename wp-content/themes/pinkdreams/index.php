<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	
  <!-- main start -->
  

  <div id="main" class="clearfix"> 
    <!-- inner start -->
      <!-- content start -->
      <div id="content">
		<?php   include  ("danh-muc-01.php")
		?>
        
			<!-- SẢN PHẨM 02 --> 
        <h3 class="h3_02"><span class="txt">Túi Xách<span class="txt02"> - Ba Lô</span></span><span class="add"><a href="bag/index.html">Xem thêm &gt&gt </a></span></h3>
        <div class="spham clearfix">
          <div class="spham-02">
          <span class="sapve"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bag_img0001-01.jpg" alt="" /></a></p>
            <p>Túi Xách<br />
              Vỏ Sò LV - MS 001</p>
            <ul class="color">
              <li class="col01"><a href="#"></a></li>
              <li class="col02"><a href="#"></a></li>
              <li class="col03"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="hot"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bag_img0002-01.jpg" alt="" /></a></p>
            <p>Ba Lô<br />
              Đính Nạm - MS 002</p>
            <ul class="color">
              <li class="col04"><a href="#"></a></li>
              <li class="col01"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="new"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bag_img0003-01.jpg" alt="" /></a></p>
            <p>Túi Đeo Chéo<br />
              Đồng Hồ La Mã - MS 003</p>
            <ul class="color">
              <li class="col02"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="sale"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bag_img0004-01.jpg" alt="" /></a></p>
            <p>Combo 3 Túi<br />
              Fashion Girl - MS 004</p>
            <ul class="color">
              <li class="col06"><a href="#"></a></li>
              <li class="col07"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="het"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bag_img0005-01.jpg" alt="" /></a></p>
            <p>Combo 4 Túi<br />
              Da Bóng Vân - MS 005</p>
            <ul class="color">
              <li class="col09"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
              <li class="col10"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02 xemthem">
          <span></span>
            <p><a href="bag/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/xemthem02.png" alt="Xem thêm"></a></p>
          </div>
        </div>  
        
			<!-- SẢN PHẨM 03 --> 
        <h3 class="h3_01"><span class="txt">Giày Dép<span class="txt02"> - Shoes</span></span><span class="add"><a href="shoes/index.html">Xem thêm &gt&gt </a></span></h3>
        <div class="spham clearfix">
          <div class="spham-01">
          <span class="sapve"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shoes_img0001-01.jpg" alt="" /></a></p>
            <p>Bộ Drap Thắng Lợi<br />
              Dây Tím - MS 001</p>
            <ul class="color">
              <li class="col01"><a href="#"></a></li>
              <li class="col02"><a href="#"></a></li>
              <li class="col03"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="hot"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shoes_img0002-01.jpg" alt="" /></a></p>
            <p>Bộ Drap Thắng Lợi<br />
              Dây Nơ - MS 002</p>
            <ul class="color">
              <li class="col04"><a href="#"></a></li>
              <li class="col01"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="new"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shoes_img0003-01.jpg" alt="" /></a></p>
            <p>Bộ Drap Thắng Lợi<br />
              Doreamon - MS 003</p>
            <ul class="color">
              <li class="col02"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="sale"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shoes_img0004-01.jpg" alt="" /></a></p>
            <p>Bộ Drap Thắng Lợi<br />
              Kitty - MS 004</p>
            <ul class="color">
              <li class="col06"><a href="#"></a></li>
              <li class="col07"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="het"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/shoes_img0005-01.jpg" alt="" /></a></p>
            <p>Bộ Drap Thắng Lợi<br />
              Lá Cây - MS 005</p>
            <ul class="color">
              <li class="col09"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
              <li class="col10"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01 xemthem">
          <span></span>
            <p><a href="shoes/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/xemthem01.png" alt="Xem thêm"></a></p>
          </div>
        </div>        
        
			<!-- SẢN PHẨM 04 --> 
        <h3 class="h3_02"><span class="txt">Quần Áo<span class="txt02"> - Clothes</span></span><span class="add"><a href="clothes/index.html">Xem thêm &gt&gt </a></span></h3>
        <div class="spham clearfix">
          <div class="spham-02">
          <span class="sapve"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clothes_img0001-01.jpg" alt="" /></a></p>
            <p>Đầm nữ<br />
              Chấm bi - MS 001</p>
            <ul class="color">
              <li class="col01"><a href="#"></a></li>
              <li class="col02"><a href="#"></a></li>
              <li class="col03"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="hot"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clothes_img0002-01.jpg" alt="" /></a></p>
            <p>Combo Mẹ &amp; Bé Trai <br />
              Sọc Ngang - MS 002</p>
            <ul class="color">
              <li class="col04"><a href="#"></a></li>
              <li class="col01"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="new"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clothes_img0003-01.jpg" alt="" /></a></p>
            <p>Combo Mẹ &amp; Bé Gái<br />
              Mickey - MS 003</p>
            <ul class="color">
              <li class="col02"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="sale"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clothes_img0004-01.jpg" alt="" /></a></p>
            <p>Combo Gia Đình 01<br />
              Sứa Biển - MS 004</p>
            <ul class="color">
              <li class="col06"><a href="#"></a></li>
              <li class="col07"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="het"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/clothes_img0005-01.jpg" alt="" /></a></p>
            <p>Combo Gia Đình 02<br />
              Gấu Bông - MS 005</p>
            <ul class="color">
              <li class="col09"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
              <li class="col10"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02 xemthem">
          <span></span>
            <p><a href="clothes/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/xemthem02.png" alt="Xem thêm"></a></p>
          </div>
        </div>  
        
			<!-- SẢN PHẨM 04 --> 
        <h3 class="h3_01"><span class="txt">Nữ Trang<span class="txt02"> - Jewelry</span></span><span class="add"><a href="jewelry/index.html">Xem thêm &gt&gt </a></span></h3>
        <div class="spham clearfix">
          <div class="spham-01">
          <span class="sapve"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jewelry_img0001-01.jpg" alt="" /></a></p>
            <p>Nhẫn<br />
              Đính Hạt - MS 001</p>
            <ul class="color">
              <li class="col01"><a href="#"></a></li>
              <li class="col02"><a href="#"></a></li>
              <li class="col03"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="hot"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jewelry_img0002-01.jpg" alt="" /></a></p>
            <p>Hoa Tai<br />
              Đính Rubi - MS 002</p>
            <ul class="color">
              <li class="col04"><a href="#"></a></li>
              <li class="col01"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="new"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jewelry_img0003-01.jpg" alt="" /></a></p>
            <p>Vòng Tay<br />
              Đính Hạt - MS 003</p>
            <ul class="color">
              <li class="col02"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
          <span class="sale"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jewelry_img0004-01.jpg" alt="" /></a></p>
            <p>Hoa Tai<br />
              Lông Vũ - MS 004</p>
            <ul class="color">
              <li class="col06"><a href="#"></a></li>
              <li class="col07"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01">
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/jewelry_img0005-01.jpg" alt="" /></a></p>
            <p>Vòng Cổ<br />
              Đính Hạt Rubi - MS 005</p>
            <ul class="color">
              <li class="col09"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
              <li class="col10"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-01 xemthem">
          <span></span>
            <p><a href="jewelry/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/xemthem01.png" alt="Xem thêm"></a></p>
          </div>
        </div>        
        
			<!-- SẢN PHẨM 06 --> 
        <h3 class="h3_02"><span class="txt">Phụ Kiện<span class="txt02"> Thời Trang</span></span><span class="add"><a href="fittings/index.html">Xem thêm &gt&gt </a></span></h3>
        <div class="spham clearfix">
          <div class="spham-02">
          <span class="sapve"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fittings_img0001-01.jpg" alt="" /></a></p>
            <p>Nón Thời Trang<br />
              Vành Rộng - MS 001</p>
            <ul class="color">
              <li class="col01"><a href="#"></a></li>
              <li class="col02"><a href="#"></a></li>
              <li class="col03"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="hot"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fittings_img0002-01.jpg" alt="" /></a></p>
            <p>Nước Hoa<br />
              Sabrina - MS 002</p>
            <ul class="color">
              <li class="col04"><a href="#"></a></li>
              <li class="col01"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="new"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fittings_img0003-01.jpg" alt="" /></a></p>
            <p>Đồng Hồ<br />
              Armani - MS 003</p>
            <ul class="color">
              <li class="col02"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="sale"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fittings_img0004-01.jpg" alt="" /></a></p>
            <p>Son Môi<br />
              Maybelline - MS 004</p>
            <ul class="color">
              <li class="col06"><a href="#"></a></li>
              <li class="col07"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02">
          <span class="het"></span>
            <p><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/fittings_img0005-01.jpg" alt="" /></a></p>
            <p>Mắt Kính<br />
              Gucci - MS 005</p>
            <ul class="color">
              <li class="col09"><a href="#"></a></li>
              <li class="col05"><a href="#"></a></li>
              <li class="col08"><a href="#"></a></li>
              <li class="col10"><a href="#"></a></li>
            </ul>
          </div>
          <div class="spham-02 xemthem">
          <span></span>
            <p><a href="fittings/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/xemthem02.png" alt="Xem thêm"></a></p>
          </div>
        </div>  
        
        
      </div>
      <!-- content end --> 
  </div>
  <!-- main end -->

<?php get_footer(); ?>
