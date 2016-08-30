<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php

            $agrs = array(

                'post_type' => 'product',

                'product_cat' => 'san-pham-ban-chay',

                'order' => 'desc',

                'showposts' => 20,

            );

            $loop = new WP_Query($agrs);

            if ($loop->have_posts()) { ?>

                <marquee direction="down" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" height="290" >

                    <ul class="list slider3 clearfix">

                        <?php

                        while ($loop->have_posts()): $loop->the_post();

                            global $product;

                            ?>

                            <li>

                                <p class="img-l"><a

                                        href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(array(50)); ?>     </a>

                                </p>

                                <h4><a href="<?php the_permalink(); ?>"

                                       title="<?php echo the_title(); ?>"><?php echo wp_trim_words(get_the_title(), 3) ?></a>

                                </h4>



                                <p class="price">

                                    <?php if (($product->get_price_html() == null)) {

                                        echo "<span class='txt-b'>Liên hệ </span>";

                                    } else {

                                        echo $product->get_price_html();

                                    } ?>

                                </p>

                            </li>

                        <?php endwhile; ?>

                    </ul>

                </marquee>

                <?php

            } else {

                echo __('Sản phẩm đang được cập nhật');            }

            ?>
</body>
</html>