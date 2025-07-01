<?php
/* Template Name: All Courses Page */

get_header();
$educate_course_arg = array(
        'post_type'=>'product',
        'posts_per_page'=>10,
        'orderby'=>'meta_value_num',
        'order'=>'DESE',
);

$educate_courses = new WP_Query($educate_course_arg);
$courses_count = 0;
?>
	<!-- Main content Start -->
	<div class="main-content">
    <?php get_template_part("template-parts/common/breadcrumb")?>
		<!-- Popular Course Section Start -->
		<div class="rs-popular-courses style1 course-view-style orange-color rs-inner-blog white-bg pt-100 pb-100 md-pt-70 md-pb-70">
			<div class="container">
				<div class="row">
					<?php get_template_part("template-parts/common/sidebar") ?>
					<div class="col-lg-8 pr-50 md-pr-15">
						<div class="course-search-part">
							<div class="course-view-part">
								<div class="view-icons">
									<a href="#" class="view-grid mr-10"><i class="fa fa-th-large"></i></a>
									<a href="#" class="view-list"><i class="fa fa-list-ul"></i></a>
								</div>
								<div class="view-text">Showing 1-9 of 11 results</div>
							</div>
							<div class="type-form">
								<form method="post" action="mailer.php">
									<!-- Form Group -->
									<div class="form-group mb-0">
										<div class="custom-select-box">
											<select id="timing">
												<option>Default</option>
												<option>Newest</option>
												<option>Old</option>
											</select>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="course-part clearfix">
                            <?php if ($educate_courses->have_posts()):
                                while  ($educate_courses->have_posts()) : $educate_courses->the_post();
                                global $product;
                            $price = $product->get_price_html();
                            $course_price = ($price > 0) ? $price : "Free";
                            $course_categories = get_the_terms($product->get_id(),'product_cat');
                               $course_url = get_permalink();
                               $course_title = get_the_title();
                               $course_image = get_the_post_thumbnail_url(get_the_ID(),'educate_course_img');
                                $courses_cs_class = ($courses_count % 2 == 0) ? 'courses-item' : 'courses-item right';
                               $courses_count++;
                                ?>
							<div class="<?php echo $courses_cs_class ?>">
								<div class="img-part">
									<img src="<?php echo esc_url($course_image)?>" alt="<?php echo esc_attr($course_title)?>">
								</div>
								<div class="content-part">
									<ul class="meta-part">
										<li><span class="price"><?php echo $course_price?></span></li>
                                        <li>
                                            <?php if (!empty($course_categories)):
                                                foreach ($course_categories as $course_category):
                                                    $course_category_url = get_term_link($course_category);
                                                ?>
                                            <a class="categorie" href="<?php echo esc_url($course_category_url)?>"><?php echo esc_html($course_category->name)?></a>
                                            <?php
                                            endforeach;
                                            endif; ?>
                                            </li>							</ul>
									<h3 class="title"><a href="<?php echo esc_url($course_url)?>"><?php echo esc_html($course_title)?></a></h3>
									<div class="bottom-part">
										<div class="info-meta">
											<ul>
												<li class="user"><i class="fa fa-user"></i> 245</li>
												<li class="ratings">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													(05)
												</li>
											</ul>
										</div>
										<div class="btn-part">
											<a href="#"><i class="flaticon-right-arrow"></i></a>
										</div>
									</div>
								</div>
							</div>
                                <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<p>No courses found.</p>';
                            endif;
                            ?>
						</div>
						<div class="pagination-area orange-color text-center mt-30 md-mt-0">
							<ul class="pagination-part">
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">Next <i class="fa fa-long-arrow-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Popular Course Section End -->
<?php get_footer(); ?>