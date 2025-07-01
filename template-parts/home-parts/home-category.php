<?php
$products = get_terms( array(
	'taxonomy'   => 'product_cat',
	'hide_empty' => true, // ক্যাটাগরিতে প্রোডাক্ট না থাকলে দেখাবে না
	'number'     => 6,    // এখানে ৬টি ক্যাটাগরি শো করছে
) );

if ( ! empty( $products ) && ! is_wp_error( $products ) ) : ?>
    <!-- Categories Section Start -->
    <div id="rs-categories" class="rs-categories main-home pt-90 pb-100 md-pt-60 md-pb-80">
        <div class="container">
            <div class="sec-title3 text-center mb-45">
                <div class="sub-title"><?php _e("Top Categories",'educate') ?></div>
                <h2 class="title black-color"><?php _e("Popular Online Categories","educate")?></h2>
            </div>
            <div class="row mb-35">
				<?php foreach ( $products as $product ) :
					$thumbnail_id = get_term_meta( $product->term_id, 'thumbnail_id', true );
					$image_url = wp_get_attachment_image_src( $thumbnail_id,'educate_product_cat');
					$product_link = get_term_link( $product );
					$product_count = $product->count;
					?>
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="categories-items">
                            <div class="cate-images">
                                <a href="<?php echo esc_url( $product_link ); ?>">
									<?php if ( $image_url[0] ) : ?>
                                        <img src="<?php echo esc_url( $image_url[0] ); ?>" alt="<?php echo esc_attr( $product->name ); ?>">
									<?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/default.jpg" alt="<?php echo esc_attr( $product->name ); ?>">
									<?php endif; ?>
                                </a>
                            </div>
                            <div class="contents">
                                <div class="img-part">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/categories/main-home/icon/<?php echo rand(1, 6); ?>.png" alt="">
                                </div>
                                <div class="content-wrap">
                                    <h2 class="title">
                                        <a href="<?php echo esc_url( $product_link ); ?>">
											<?php echo esc_html( $product->name ); ?>
                                        </a>
                                    </h2>
                                    <span class="course-qnty"><?php echo esc_html( $product_count ); ?> <?php _e('Courses','educate'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
            <div class="col-lg-12 text-center">
                <a class="readon orange-btn main-home" href="<?php echo esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>">View All Categories</a>
            </div>
        </div>
    </div>
    <!-- Categories Section End -->
<?php endif; ?>
