<!-- Popular Courses Start -->
<div id="rs-popular-courses" class="rs-popular-courses main-home event-bg pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <div class="sub-title">Select Courses</div>
            <h2 class="title black-color">Explore Popular Courses</h2>
        </div>
        <div class="row">
			<?php
			$popular_course_arg = array(
				'post_type'      => 'product',
				'posts_per_page' => 6,
				'meta_key'       => 'total_sales',
				'orderby'        => 'meta_value_num',
				'order'          => 'DESC',
			);

			$loop = new WP_Query($popular_course_arg);

			if ($loop->have_posts()) :
				while ($loop->have_posts()) : $loop->the_post();
					global $product;
					$students = get_post_meta(get_the_ID(), 'course_students', true);
					$lessons = get_post_meta(get_the_ID(), 'course_lessons', true);
					?>
                    <div class="col-lg-4 col-md-6 mb-24">
                        <div class="courses-item">
                            <div class="courses-grid">
                                <div class="img-part">
                                    <a href="<?php the_permalink(); ?>">
										<?php echo $product->get_image('educate_course_img'); ?>
                                    </a>
                                </div>
                                <div class="content-part">
                                    <div class="info-meta">
                                        <ul>
                                            <li class="ratings">
		                                        <?php
		                                        $average_rating = $product->get_average_rating();
		                                        $full_stars = floor($average_rating);
		                                        $half_star = ($average_rating - $full_stars) >= 0.5 ? 1 : 0;
		                                        $empty_stars = 5 - $full_stars - $half_star;

		                                        for ($i = 0; $i < $full_stars; $i++) {
			                                        echo '<i class="fa fa-star"></i>';
		                                        }

		                                        if ($half_star) {
			                                        echo '<i class="fa fa-star-half-o"></i>';
		                                        }

		                                        for ($i = 0; $i < $empty_stars; $i++) {
			                                        echo '<i class="fa fa-star-o"></i>';
		                                        }
		                                        ?>
                                                (<?php echo esc_html($average_rating); ?> rating)
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="course-price">
                                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                                    </div>
                                    <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <ul class="meta-part">
                                        <li class="user">
                                            <i class="fa fa-user"></i>
											<?php echo esc_html($product->get_total_sales()); ?> Enrolled
                                        </li>
                                        <li class="user">
                                            <i class="fa fa-file"></i>
											<?php echo esc_html($lessons ? $lessons : 'N/A'); ?> Lessons
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php
				endwhile;
			endif;
			wp_reset_postdata();
			?>
        </div>
    </div>
</div>
<!-- Popular Courses End -->
