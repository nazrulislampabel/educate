<?php $faqs = get_option('theme_options')['faq_list'] ?? [] ?>
<!-- Faq Section Start -->
<div class="rs-faq-part style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 padding-0">
				<div class=" main-part">
					<div class="title mb-40 md-mb-15">
						<h2 class="text-part"><?php echo __('Frequently Asked Questions','educate')?></h2>
					</div>
					<div class="faq-content">
                        <div class="accordion" id="accordionExample">
							<?php if (!empty($faqs)): ?>
								<?php foreach ($faqs as $faqN => $faq): ?>
									<?php
									// ইউনিক আইডি তৈরি
									$headingId = 'heading' . $faqN;
									$collapseId = 'collapse' . $faqN;
									$isFirst = ($faqN === 0);
									?>
                                    <div class="accordion-item card">
                                        <div class="accordion-header card-header" id="<?php echo esc_attr($headingId); ?>">
                                            <button class="accordion-button card-link <?php echo $isFirst ? '' : 'collapsed'; ?>" type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#<?php echo esc_attr($collapseId); ?>"
                                                    aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>"
                                                    aria-controls="<?php echo esc_attr($collapseId); ?>">
												<?php echo esc_html($faq['faq_question']); ?>
                                            </button>
                                        </div>
                                        <div id="<?php echo esc_attr($collapseId); ?>"
                                             class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>"
                                             aria-labelledby="<?php echo esc_attr($headingId); ?>"
                                             data-bs-parent="#accordionExample">
                                            <div class="accordion-body card-body">
												<?php echo esc_html($faq['faq_answer']); ?>
                                            </div>
                                        </div>
                                    </div>
								<?php endforeach; ?>
							<?php endif; ?>
                        </div>

                    </div>
				</div>
			</div>
			<div class="col-lg-6 padding-0">
				<div class="img-part media-icon orange-color">
					<a class="popup-videos" href="<?php echo esc_url(get_option('theme_options')['faq_link'])?>">
						<i class="fa fa-play"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- faq Section Start -->