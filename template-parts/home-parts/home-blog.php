<!-- Blog Section Start -->
<div id="rs-blog" class="rs-blog main-home pb-100 pt-100 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-50">
            <div class="sub-title"> News Update</div>
            <h2 class="title"> Latest News & Events</h2>
        </div>

        <div class="rs-carousel owl-carousel"
             data-loop="true" data-items="3" data-margin="30"
             data-autoplay="true" data-hoverpause="true"
             data-autoplay-timeout="5000" data-smart-speed="800"
             data-dots="false" data-nav="false" data-center-mode="false"
             data-mobile-device="1" data-ipad-device="2" data-md-device="3">

			<?php
			$blog_home_args = array(
				'post_type'      => 'post',
				'posts_per_page' => 6,
			);

			$blog_query = new WP_Query($blog_home_args);

			if ($blog_query->have_posts()):
				while ($blog_query->have_posts()) : $blog_query->the_post();
					?>
                    <div class="blog-item">
                        <div class="image-part">
                            <a href="<?php the_permalink(); ?>">
								<?php
								if (has_post_thumbnail()) {
									the_post_thumbnail('educate_course_img');
								} else {
									echo '<img src="' . get_template_directory_uri() . '/assets/images/no-image.jpg" alt="No image">';
								}
								?>
                            </a>
                        </div>
                        <div class="blog-content">
                            <ul class="blog-meta">
                                <li><i class="fa fa-user-o"></i> <?php the_author(); ?></li>
                                <li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
                            </ul>
                            <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="desc"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></div>
                            <div class="btn-btm">
                                <div class="cat-list">
                                    <ul class="post-categories">
										<?php
										$categories = get_the_category();
										if ($categories) {
											foreach ($categories as $category) {
												echo '<li><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></li>';
											}
										}
										?>
                                    </ul>
                                </div>
                                <div class="rs-view-btn">
                                    <a href="<?php the_permalink(); ?>">Read More</a>
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
<!-- Blog Section End -->
