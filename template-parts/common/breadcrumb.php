<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs breadcrumbs-overlay">
	<div class="breadcrumbs-img">
		<img src="<?php echo get_template_directory_uri();?>/assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
	</div>
	<div class="breadcrumbs-text">
		<h1 class="page-title"><?php wp_title() ?></h1>
        <?php if(function_exists('bcn_display_list')) : ?>
            <ul>
                <?php bcn_display_list(); ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<!-- Breadcrumbs End -->
