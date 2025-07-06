<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
?>
<!-- Main content Start -->
<div class="main-content">
    <?php get_template_part("template-parts/common/breadcrumb"); ?>
    <!-- Popular Course Section Start -->
    <div class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-4 col-md-12 order-last">
                    <div class="widget-area">
                        <?php echo do_shortcode('[acf_filter_form]'); ?>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="col-lg-8 pr-50 md-pr-15">
                    <div class="course-search-part">
                        <div class="course-view-part">
                            <div class="view-icons">
                                <a href="#" class="view-grid mr-10"><i class="fa fa-th-large"></i></a>
                                <a href="#" class="view-list"><i class="fa fa-list-ul"></i></a>
                            </div>
                            <div class="view-text">
                                <?php woocommerce_result_count(); ?>
                            </div>
                        </div>
                        <div class="type-form">
                            <?php woocommerce_catalog_ordering(); ?>
                        </div>
                    </div>

                    <div class="course-part clearfix">
                        <?php if ( woocommerce_product_loop() ) : ?>
                            <?php while ( have_posts() ) : the_post(); global $product;
                                $product_price = ($product->get_price_html())? : "Free";
                                ?>
                                <div class="courses-item<?php echo $product->get_id() % 2 == 0 ? ' right' : ''; ?>">
                                    <div class="img-part">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php echo $product->get_image('educate_course_img'); ?>
                                        </a>
                                    </div>
                                    <div class="content-part">
                                        <ul class="meta-part">
                                            <li><span class="price"><?php echo $product_price; ?></span></li>
                                            <li>
                                                <?php
                                                $terms = get_the_terms( $product->get_id(), 'product_cat' );
                                                if ( ! empty( $terms ) ) {
                                                    echo '<a class="categorie" href="' . esc_url( get_term_link( $terms[0] ) ) . '">' . esc_html( $terms[0]->name ) . '</a>';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                        <h3 class="title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="bottom-part">
                                            <div class="info-meta">
                                                <ul>
                                                    <li class="user"><i class="fa fa-user"></i>
                                                        <?php echo get_post_meta( get_the_ID(), 'student_count', true ) ?: 'N/A'; ?>
                                                    </li>
                                                    <li class="ratings">
                                                        <?php echo wc_get_rating_html( $product->get_average_rating() ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="btn-part">
                                                <a href="<?php the_permalink(); ?>"><i class="flaticon-right-arrow"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <p><?php esc_html_e( 'No products found', 'woocommerce' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <?php get_template_part("template-parts/common/pagination") ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Course Section End -->
</div>
<?php get_footer( 'shop' ); ?>
