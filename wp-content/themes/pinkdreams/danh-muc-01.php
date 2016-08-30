<!-- SẢN PHẨM 01 -->

<h3 class="h3_01"><span class="txt">Chăn Drap<span class="txt02"> - Cotton Thắng Lợi</span></span><span class="add"><a href="drap/index.html">Xem thêm &gt&gt </a></span></h3>
<div class="spham clearfix">
		<?php

            $agrs = array(

                'post_type' => 'product',

                'product_cat' => 'drap',

                'order' => 'desc',

                'showposts' => 5,

            );

            $loop = new WP_Query($agrs);

            if ($loop->have_posts()) { ?>
		<?php

                        while ($loop->have_posts()): $loop->the_post();

                            global $product;

                            ?>
		<div class="spham-01">
				<?php if(get_field('icon-field') !=""){
				$giatri= implode(', ', get_field('icon-field'));
				if($giatri=="sapve"){?>
				<span class="sapve"></span>
				
				<?php } else if($giatri=="hot"){?>
				<span class="hot"></span>
				
				<?php } else if($giatri=="new"){?>
				<span class="new"></span>				
				
				<?php } else if($giatri=="sale"){?>
				<span class="sale"></span>			
				
				<?php } else if($giatri=="hethang"){?>
				<span class="het"></span>
				<?php }?>
				
				<?php  } ?>
				
				<p><a data-lightbox="Drap-B1"  href="<?php the_post_thumbnail_url('full'); ?>" data-title="<?php echo the_title(); ?>"> <?php echo woocommerce_get_product_thumbnail(); ?></a></p>
				<p><a href="<?php the_permalink(); ?>" title="<?php echo the_title(); ?>">
				<?php if(get_field('ten_san_pham_drap') !=""){
				$sanpham= implode(', ', get_field('ten_san_pham_drap'));
				echo $sanpham?>				
				<?php  } ?><br>
				<?php echo get_the_title() ?></a></p>
				
				
		</div>
		<?php endwhile; ?>
		<?php

            } else {

                echo __('Sản phẩm đang được cập nhật');            }

            ?>
		<div class="spham-01 xemthem"> <span></span>
				<p><a href="drap/index.html"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/xemthem01.png" alt="Xem thêm"></a></p>
		</div>
</div>
