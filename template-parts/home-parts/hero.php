<?php
$sliders = get_option('theme_options')['hero'] ?? [];
$features = get_option('theme_options')['feature'] ?? []
?>
<!-- Slider Section Start -->
<div class="rs-slider main-home">
	<div class="rs-carousel owl-carousel" data-loop="true" data-items="1" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="1" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="1" data-md-device-nav="true" data-md-device-dots="false">
		<?php if (!empty($sliders)): ?>
        <?php foreach ($sliders as $slider):?>
        <div class="slider-content slide1" style="background-image: url(<?php echo esc_url($slider['hero-image'])?>;">
			<div class="container">
				<div class="content-part">
					<div class="sl-sub-title wow bounceInLeft" data-wow-delay="300ms" data-wow-duration="2000ms"><?php echo esc_html($slider['hero-sub-title'])?></div>
					<h1 class="sl-title wow fadeInRight" data-wow-delay="600ms" data-wow-duration="2000ms"><?php echo esc_html($slider['hero-heading'])?></h1>
					<div class="sl-btn wow fadeInUp" data-wow-delay="900ms" data-wow-duration="2000ms">
						<a class="readon orange-btn main-home" href="<?php echo esc_url($slider['hero-button-url'])?>"><?php echo esc_html($slider['hero-button-text']) ?></a>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
        <?php endif; ?>
	</div>

	<!-- Features Section start -->
	<div id="rs-features" class="rs-features main-home">
		<div class="container">
			<div class="row">
                <?php if (!empty($features)): ?>
                <?php foreach ($features as $feature): ?>
				<div class="col-lg-4 col-md-12 md-mb-30">
					<div class="features-wrap">
						<div class="icon-part">
                            <i class="<?php echo esc_html($feature ['feature-icon'])?>"></i>
                        </div>
						<div class="content-part">
							<h4 class="title">
								<span class="watermark">5,320 online courses</span>
							</h4>
							<p class="dese">
								Enjoy a variety of fresh topics
							</p>
						</div>
					</div>
				</div>
                <?php endforeach; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<!-- Features Section End -->
</div>
<!-- Slider Section End -->