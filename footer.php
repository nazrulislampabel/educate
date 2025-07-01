
<!-- Newsletter section start -->
<div class="rs-newsletter style1 orange-color mb--90 sm-mb-0 sm-pb-70">
    <div class="container">
        <div class="newsletter-wrap">
            <div class="row y-middle">
                <div class="col-lg-6 col-md-12 md-mb-30">
                    <div class="content-part">
                        <div class="sec-title">
                            <div class="title-icon md-mb-15">
                                <img src="<?php echo get_template_directory_uri();?>/assets/images/newsletter.png" alt="images">
                            </div>
                            <h2 class="title mb-0 white-color"><?php echo get_theme_mod( 'newsletter_heading', 'Subscribe to our newsletter','educate' ); ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <form class="newsletter-form">
                        <input type="email" name="email" placeholder="Enter Your Email" required="">
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Newsletter section end -->
</div>
<!-- Main content End -->
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer home9-style main-home">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <div class="footer-logo mb-30">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/assets/images/lite-logo.png" alt=""></a>
                    </div>
                    <div class="textwidget pr-60 md-pr-15"><p class="white-color">We denounce with righteous indi gnation and dislike men who are so beguiled and demoralized by the charms of pleasure of your moment, so blinded by desire those who fail weakness.</p>
                    </div>
                    <ul class="footer_social">
                        <li>
                            <a href="#" target="_blank"><span><i class="fa fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-twitter"></i></span></a>
                        </li>

                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-pinterest-p"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-google-plus-square"></i></span></a>
                        </li>
                        <li>
                            <a href="# " target="_blank"><span><i class="fa fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget md-mb-50">
                    <h3 class="widget-title">Address</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">374 William S Canning Blvd, River MA 2721, USA</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)155-69569">(+880)155-69569</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:support@rstheme.com">support@rstheme.com</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-50 md-pl-15 footer-widget md-mb-50">
                    <h3 class="widget-title">Courses</h3>
	                <?php
	                $educate_menu_course = wp_nav_menu( array(
		                'theme_location'=>'footer-menu',
		                'menu_id'=>'footer-menu',
		                'menu_class'=>'site-map',
	                ))
	                ?>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <h3 class="widget-title">Recent Posts</h3>
                    <div class="recent-post mb-20">
                        <div class="post-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/footer/1.jpg" alt="">
                        </div>
                        <div class="post-item">
                            <div class="post-desc">
                                <a href="#">University while the lovely valley team work</a>
                            </div>
                            <span class="post-date">
                                        <i class="fa fa-calendar"></i>
                                        September 20, 2020
                                    </span>
                        </div>
                    </div>
                    <div class="recent-post mb-20 md-pb-0">
                        <div class="post-img">
                            <img src="<?php echo get_template_directory_uri();?>/assets/images/footer/2.jpg" alt="">
                        </div>
                        <div class="post-item">
                            <div class="post-desc">
                                <a href="#">High school program starting soon 2021</a>
                            </div>
                            <span class="post-date">
                                       <i class="fa fa-calendar-check-o"></i>
                                        September 14, 2020
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-20">
                    <div class="copyright">
                        <p>&copy; 2020 All Rights Reserved. Developed By <a href="http://rstheme.com/">RSTheme</a></p>
                    </div>
                </div>
                <div class="col-lg-6 text-end md-text-start">
	                <?php
	                $educate_menu_bottom = wp_nav_menu( array(
		                'theme_location'=>'footer-bottom',
		                'menu_id'=>'footer-bottom',
		                'menu_class'=>'copy-right-menu',
	                ))
	                ?>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <button type="button" class="close" data-bs-dismiss="modal">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<?php wp_footer(); ?>
</body>
</html>