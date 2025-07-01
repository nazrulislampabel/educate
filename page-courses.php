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
					<div class="col-lg-4 col-md-12 order-last">
						<div class="widget-area">
							<div class="search-widget mb-50">
								<h3 class="widget-title">Course Search</h3>
								<div class="search-wrap">
									<input type="search" placeholder="Searching..." name="s" class="search-input" value="">
									<button type="submit" value="Search"><i class=" flaticon-search"></i></button>
								</div>
							</div>
							<div class="widget-archives mb-50">
								<h3 class="widget-title">Filter By</h3>
								<div class="filter-widget">
									<!-- Skills Form -->
									<div class="filter-form">
										<form method="post" action="mailer.php">
											<div class="single-filter mb-30">
												<h5>Skill Level</h5>
												<!-- Radio Box -->
												<div class="radio-box form-group">
													<input type="radio" name="skill" id="type1" value="beginer" checked>
													<label for="type1">Beginner</label>
												</div>

												<!-- Radio Box -->
												<div class="radio-box form-group">
													<input type="radio" name="skill" id="type2" value="intermediate">
													<label for="type2">Intermediate</label>
												</div>

												<!-- Radio Box -->
												<div class="radio-box form-group">
													<input type="radio" name="skill" id="type3" value="expert">
													<label for="type3">Expert</label>
												</div>
											</div>

											<div class="single-filter mb-30">
												<h5>Price Level</h5>
												<!-- Radio Box -->
												<div class="radio-box form-group">
													<input type="radio" name="price" id="type4" value="free" checked>
													<label for="type4">Free (14)</label>
												</div>

												<div class="radio-box form-group">
													<input type="radio" name="price" id="type5" value="paid">
													<label for="type5">Paid (26)</label>
												</div>
											</div>

											<div class="single-filter mb-30">
												<h5>Duration Time</h5>
												<!-- Radio Box -->
												<div class="radio-box form-group">
													<input type="radio" name="duration" id="type6" value="six" checked>
													<label for="type6">5+ hours (30)</label>
												</div>

												<div class="radio-box form-group">
													<input type="radio" name="duration" id="type7" value="paid">
													<label for="type7">10+ hours (20)</label>
												</div>

												<div class="radio-box form-group">
													<input type="radio" name="duration" id="type8" value="paid">
													<label for="type8">15+ hours (5)</label>
												</div>
											</div>

											<div class="single-filter mb-30">
												<h5>Course Type</h5>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check1" value="check1" checked>
													<label for="check1">Backend (3)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check2" value="check2">
													<label for="check2">CSS (6)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check3" value="check3">
													<label for="check3">Frontend (8)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check4" value="check4">
													<label for="check4">General (3)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check5" value="check5">
													<label for="check5">Photography (7)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check6" value="check6">
													<label for="check6">Photography (4)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" name="course" id="check7" value="check7">
													<label for="check7">Technology (5)</label>
												</div>
											</div>

											<div class="single-filter mb-30">
												<h5>Instructor</h5>
												<div class="check-box form-group mb-0">
													<input type="checkbox" id="check8" name="check8" value="check8" checked>
													<label for="check8">Stuard (5)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" id="check9" name="check9" value="check9">
													<label for="check9">Benjamin (4)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" id="check10" name="check10" value="check10">
													<label for="check10">Mickel (7)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" id="check11" name="check11" value="check11">
													<label for="check11">Johnson (2)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" id="check12" name="check12" value="check12">
													<label for="check12">Elijabeth (5)</label>
												</div>
												<div class="check-box form-group mb-0">
													<input type="checkbox" id="check13" name="check13" value="check13">
													<label for="check13">Rebeka (4)</label>
												</div>
											</div>

											<div class="form-group mb-0">
												<input class="readon2 orange" type="submit" value="Submit Now">
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="widget-archives mb-50">
								<h3 class="widget-title">Course Categories</h3>
								<ul class="categories">
									<li><a href="#">College</a></li>
									<li><a href="#">High School</a></li>
									<li><a href="#">Primary</a></li>
									<li><a href="#">School</a></li>
									<li><a href="#">University</a></li>
								</ul>
							</div>
						</div>
					</div>
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
                            $course_categories = wc_get_product_category_list($product->get_id());
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
										<li><a class="categorie" href="<?php echo esc_url($course_url)?>"><?php echo esc_html($course_title)?></a></li>
									</ul>
									<h3 class="title"><a href="<?php  ?>">Become a PHP Master and Make Money Fast</a></h3>
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