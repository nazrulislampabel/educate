<?php $ctas = get_option('theme_options')['cta'] ?? [] ?>
<!-- CTA Section Start -->
<div class="rs-cta main-home">
	<div class="partition-bg-wrap">
		<div class="container">
			<div class="row">
				<div class="offset-lg-6 col-lg-6 pl-70 md-pl-15">
					<?php if (!empty($ctas)): ?>
					<?php foreach ($ctas as $cta): ?>
                    <div class="sec-title3 mb-40">
						<h2 class="title white-color mb-16"><?php echo esc_html($cta ['cta-head'])?></h2>
						<div class="desc white-color pr-100 md-pr-0"><?php echo esc_html($cta ['sub-title'])?></div>
                    </div>
					<div class="btn-part">
						<a class="readon orange-btn transparent" href="<?php echo esc_url($cta ['cta-url'])?>"><?php echo esc_html($cta ['cta-button'])?></a>
					</div>
						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- CTA Section End -->