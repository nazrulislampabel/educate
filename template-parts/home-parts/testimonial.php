<?php $testimonials = get_option('theme_options')['test_list'] ?? []?>
<!-- Testimonial Section Start -->
<div class="rs-testimonial main-home pt-100 pb-100 md-pt-70 md-pb-70">
	<div class="container">
		<div class="sec-title3 mb-50 md-mb-30 text-center">
			<div class="sub-title primary"><?php _e('Testimonial','educate')?></div>
			<h2 class="title white-color"><?php _e('What Students Saying','educate'); ?></h2>
		</div>
		<div class="rs-carousel owl-carousel"
		     data-loop="true"
		     data-items="2"
		     data-margin="30"
		     data-autoplay="true"
		     data-hoverpause="true"
		     data-autoplay-timeout="5000"
		     data-smart-speed="800"
		     data-dots="true"
		     data-nav="false"
		     data-nav-speed="false"

		     data-md-device="2"
		     data-md-device-nav="false"
		     data-md-device-dots="true"
		     data-center-mode="false"

		     data-ipad-device2="1"
		     data-ipad-device-nav2="false"
		     data-ipad-device-dots2="true"

		     data-ipad-device="2"
		     data-ipad-device-nav="false"
		     data-ipad-device-dots="true"

		     data-mobile-device="1"
		     data-mobile-device-nav="false"
		     data-mobile-device-dots="false">
			<?php if (!empty($testimonials)): ?>
				<?php foreach ($testimonials as $testimonial): ?>
                    <div class="testi-item">
                        <div class="author-desc">
                            <div class="desc">
                                <img class="quote" src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial/main-home/test-2.png" alt="">
								<?php echo esc_html($testimonial['client_fd']); ?>
                            </div>

							<?php
							$client_img_id = isset($testimonial['client_img_id']) ? intval($testimonial['client_img_id']) : 0;
							$client_img = $client_img_id ? wp_get_attachment_image_src($client_img_id, 'educate_small') : false;
							?>

							<?php if ($client_img): ?>
                                <div class="author-img">
                                    <img src="<?php echo esc_url($client_img[0]); ?>" alt="">
                                </div>
							<?php endif; ?>
                        </div>

                        <div class="author-part">
                            <a class="name" href="#"><?php echo esc_html($testimonial['client']); ?></a>
                            <span class="designation"><?php echo esc_html($testimonial['client_pos']); ?></span>
                        </div>
                    </div>
				<?php endforeach; ?>
			<?php endif; ?>

        </div>
	</div>
</div>
<!-- Testimonial Section End -->
