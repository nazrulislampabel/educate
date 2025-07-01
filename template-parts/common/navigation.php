<!-- Menu Start -->
<div class="menu-area menu-sticky">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-2">
                <div class="logo-cat-wrap">
                    <div class="logo-part">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
		                    <?php
		                    $normal_logo = get_theme_mod('normal_logo');
		                    $sticky_logo = get_theme_mod('sticky_logo');

		                    $default_normal = get_template_directory_uri() . '/assets/images/lite-logo.png';
		                    $default_sticky = get_template_directory_uri() . '/assets/images/dark-logo.png';

		                    if (is_home()) {
			                    echo '<img class="normal-logo" src="' . esc_url($normal_logo ?: $default_normal) . '" alt="Normal Logo">';
			                    echo '<img class="sticky-logo" src="' . esc_url($sticky_logo ?: $default_sticky) . '" alt="Sticky Logo">';
		                    } else {
                                echo '<img class="sticky-logo" src="' . esc_url($sticky_logo ?: $default_sticky) . '" alt="Sticky Logo">';
		                    }
		                    ?>
                        </a>
                    </div>

                    <?php
					?>
                </div>
            </div>
            <div class="col-lg-8 text-end">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <div class="mobile-menu">
                            <a class="rs-menu-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>
                        <nav class="rs-menu">
                            <?php
                            $educate_menu = wp_nav_menu( array(
                                    'theme_location'=>'main-menu',
                                    'menu_id'=>'main-menu',
                                    'menu_class'=>'nav-menu',
                            ))
                            ?>
                        </nav>
                    </div> <!-- //.main-menu -->

                </div>
            </div>
            <div class="col-lg-2 text-end">
                <div class="expand-btn-inner">
                    <ul>

                        <li>
                            <a class="hidden-xs rs-search" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">
                                <i class="flaticon-search"></i>
                            </a>
                        </li>
                        <li class="user-icon cart-inner no-border mini-cart-active">
                            <a href="#"><i class="fa fa-shopping-bag"></i></a>
                            <div class="woocommerce-mini-cart text-start">
                                <div class="cart-bottom-part">
                                    <ul class="cart-icon-product-list">
                                        <li class="display-flex">
                                            <div class="icon-cart">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <a href="cart.html">Law Book</a><br>
                                                <span class="quantity">1 × $30.00</span>
                                            </div>
                                            <div class="product-image">
                                                <a href="cart.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/1.jpg" alt="Product Image"></a>
                                            </div>
                                        </li>
                                        <li class="display-flex">
                                            <div class="icon-cart">
                                                <a href="#"><i class="fa fa-times"></i></a>
                                            </div>
                                            <div class="product-info">
                                                <a href="cart.html">Spirit Level</a><br>
                                                <span class="quantity">1 × $30.00</span>
                                            </div>
                                            <div class="product-image">
                                                <a href="cart.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/shop/2.jpg" alt="Product Image"></a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="total-price text-center">
                                        <span class="subtotal">Subtotal:</span>
                                        <span class="current-price">$85.00</span>
                                    </div>

                                    <div class="cart-btn text-center">
                                        <a class="crt-btn btn1" href="cart.html">View Cart</a>
                                        <a class="crt-btn btn2" href="checkout.html">Check Out</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="user-icon last-icon">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </li>

                    </ul>
                    <span>
                                            <a id="nav-expander" class="nav-expander">
                                                <span class="dot1"></span>
                                                <span class="dot2"></span>
                                                <span class="dot3"></span>
                                            </a>
                                        </span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

<!-- Canvas Menu start -->
<nav class="right_menu_togle hidden-md">
    <div class="close-btn">
        <div id="nav-close">
            <div class="line">
                <span class="line1"></span><span class="line2"></span>
            </div>
        </div>
    </div>
    <div class="canvas-logo">
        <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/dark-logo.png" alt="logo"></a>
    </div>
    <div class="offcanvas-text">
        <p>We denounce with righteous indige nationality and dislike men who are so beguiled and demo  by the charms of pleasure of the moment data com so blinded by desire.</p>
    </div>
    <div class="offcanvas-gallery">
        <div class="gallery-img">
            <a class="image-popup" href="<?php echo get_template_directory_uri();?>/assets/images/gallery/1.jpg"><img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/1.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="<?php echo get_template_directory_uri();?>/assets/images/gallery/2.jpg"><img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/2.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="<?php echo get_template_directory_uri();?>/assets/images/gallery/3.jpg"><img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/3.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="<?php echo get_template_directory_uri();?>/assets/images/gallery/4.jpg"><img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/4.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="<?php echo get_template_directory_uri();?>/assets/images/gallery/5.jpg"><img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/5.jpg" alt=""></a>
        </div>
        <div class="gallery-img">
            <a class="image-popup" href="<?php echo get_template_directory_uri();?>/assets/images/gallery/6.jpg"><img src="<?php echo get_template_directory_uri();?>/assets/images/gallery/6.jpg" alt=""></a>
        </div>
    </div>
    <div class="map-img">
        <img src="<?php echo get_template_directory_uri();?>/assets/images/map.jpg" alt="">
    </div>
    <div class="canvas-contact">
        <ul class="social">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
        </ul>
    </div>
</nav>
<!-- Canvas Menu end -->