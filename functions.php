<?php
require_once( get_theme_file_path( "/inc/tgm.php" ) );
require_once( get_theme_file_path( "/inc/cmb2-metabox.php" ) );
require_once( get_theme_file_path( "/inc/cpt-ui.php" ) );
//require_once( get_theme_file_path( "/inc/kirki-framework.php" ));
require_once( get_theme_file_path( "/widgets/theme-widgets.php" ));
function educate_theme_setup(){
    add_theme_support("post-thumbnails");
    add_theme_support("custom-logo");
    add_theme_support("title-tag");
    add_theme_support("title-tag");
    add_theme_support( 'automatic-feed-links' );
    add_theme_support('woocommerce');
    add_theme_support( 'html5', array( 'search-form', 'comment-list' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "audio", "video", "link" ) );
    add_editor_style( "/assets/css/editor-style.css" );
    register_nav_menu("main-menu",__("Main Menu","educate"));
    register_nav_menus( array(
		'footer-menu'=>__("Footer Course Menu",'educate'),
		'footer-bottom'=>__("Footer Bottom Menu",'educate'),
	    )

    );
	add_image_size('educate_sqr', 395, 250, true);
	add_image_size('educate_small', 70, 70, true);
	add_image_size('educate_product_cat', 360, 360, true);
	add_image_size('educate_course_img', 360, 200, true);


}

add_action('after_setup_theme','educate_theme_setup');


function educate_assets(){
    // ✅ CSS Files
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rubik:300,400,500,600,700,800|Nunito:300,400,600,700,800,900&display=swap', false );
    wp_enqueue_style("bootstrap-css", get_theme_file_uri("/assets/css/bootstrap.min.css"), null, "5.0.2");
    wp_enqueue_style("font-awesome-css", get_theme_file_uri("/assets/css/font-awesome.min.css"), null, "4.7.0");
    wp_enqueue_style("animate-css", get_theme_file_uri("/assets/css/animate.css"), null, "1.0");
    wp_enqueue_style("owl-carousel-css", get_theme_file_uri("/assets/css/owl.carousel.css"), null, "1.0");
    wp_enqueue_style("slick-css", get_theme_file_uri("/assets/css/slick.css"), null, "1.0");
    wp_enqueue_style("off-canvas-css", get_theme_file_uri("/assets/css/off-canvas.css"), null, "1.0");
    wp_enqueue_style("linea-fonts-css", get_theme_file_uri("/assets/fonts/linea-fonts.css"), null, "1.0");
    wp_enqueue_style("flaticon-css", get_theme_file_uri("/assets/fonts/flaticon.css"), null, "1.0");
    wp_enqueue_style("magnific-popup-css", get_theme_file_uri("/assets/css/magnific-popup.css"), null, "1.0");
    wp_enqueue_style("rsmenu-main-css", get_theme_file_uri("/assets/css/rsmenu-main.css"), null, "1.0");
    wp_enqueue_style("rs-spacing-css", get_theme_file_uri("/assets/css/rs-spacing.css"), null, "1.0");
    wp_enqueue_style("responsive-css", get_theme_file_uri("/assets/css/responsive.css"), null, time());
    wp_enqueue_style("main-style", get_theme_file_uri("/assets/css/style.css"), null, time());
    wp_enqueue_style("theme-style", get_stylesheet_uri(), null, time());
// ✅ Dynamic CSS Injection
	$bg_image_url = get_theme_file_uri();
	$faq_image =  get_option('theme_options')['faq_image'];
	$custom_css = "
        .rs-cta.main-home .partition-bg-wrap::before {
           background: url('{$bg_image_url}/assets/images/cta/main-home.jpg') 0% 0% / cover no-repeat;
        }
    .rs-cta.main-home .partition-bg-wrap:after {
    background: url('{$bg_image_url}/assets/images/cta/home1.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.rs-testimonial.main-home {
    background: url('{$bg_image_url}/assets/images/bg/main-home.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
.rs-faq-part.style1 .img-part {
    background: url('{$faq_image}');
    background-size: cover;
    background-position: center;
    width: 100%;
    height: 100%;
    min-height: 615px;
}
    ";
	wp_add_inline_style('main-style', $custom_css);
    // ✅ JS Files
    wp_enqueue_script("modernizr-js", get_theme_file_uri("/assets/js/modernizr-2.8.3.min.js"), null, "2.8.3", false);
    wp_enqueue_script("bootstrap-js", get_theme_file_uri("/assets/js/bootstrap.min.js"), array("jquery"), "5.0.2", true);
    wp_enqueue_script("rsmenu-main-js", get_theme_file_uri("/assets/js/rsmenu-main.js"), array("jquery"), time(), true);
    wp_enqueue_script("jquery-nav-js", get_theme_file_uri("/assets/js/jquery.nav.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("owl-carousel-js", get_theme_file_uri("/assets/js/owl.carousel.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("slick-js", get_theme_file_uri("/assets/js/slick.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("isotope-js", get_theme_file_uri("/assets/js/isotope.pkgd.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("imagesloaded-js", get_theme_file_uri("/assets/js/imagesloaded.pkgd.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("wow-js", get_theme_file_uri("/assets/js/wow.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("skill-bars-js", get_theme_file_uri("/assets/js/skill.bars.jquery.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("counterup-js", get_theme_file_uri("/assets/js/jquery.counterup.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("waypoints-js", get_theme_file_uri("/assets/js/waypoints.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("ytplayer-js", get_theme_file_uri("/assets/js/jquery.mb.YTPlayer.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("magnific-popup-js", get_theme_file_uri("/assets/js/jquery.magnific-popup.min.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("plugins-js", get_theme_file_uri("/assets/js/plugins.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("contact-form-js", get_theme_file_uri("/assets/js/contact.form.js"), array("jquery"), "1.0", true);
    wp_enqueue_script("main-js", get_theme_file_uri("/assets/js/main.js"), array("jquery"), time(), true);
    // Ajax URL লোকালাইজ করো JS-এ
    wp_localize_script( 'educate-main', 'woocommerce_params', array(
        'ajax_url' => admin_url( 'admin-ajax.php' )
    ));
    // ✅ Optional: IE Support (conditional scripts)
    wp_enqueue_script("html5shiv", "https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js", null, "3.7.2", false);
    wp_script_add_data("html5shiv", "conditional", "lt IE 9");

    wp_enqueue_script("respond", "https://oss.maxcdn.com/respond/1.4.2/respond.min.js", null, "1.4.2", false);
    wp_script_add_data("respond", "conditional", "lt IE 9");
}
add_action('wp_enqueue_scripts','educate_assets');


// Enqueue live preview JS
function mytheme_customize_preview_js() {
	wp_enqueue_script( 'mytheme-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'jquery', 'customize-preview' ), time(), true );
}
add_action( 'customize_preview_init', 'mytheme_customize_preview_js' );


class Site_Info_Widget extends WP_Widget {

	public function __construct() {
		parent::__construct(
			'site_info_widget',
			__('Site Info Widget', 'textdomain'),
			array('description' => __('Displays logo, site info and social links.', 'textdomain'))
		);
	}

	public function widget($args, $instance) {
		echo $args['before_widget'];

		// Output logo
		if (!empty($instance['logo'])) {
			echo '<div class="site-info-logo">';
			echo '<img src="' . esc_url($instance['logo']) . '" alt="Site Logo" style="max-width:100%;">';
			echo '</div>';
		}

		// Output info
		if (!empty($instance['info'])) {
			echo '<div class="site-info-text">';
			echo wpautop(esc_html($instance['info']));
			echo '</div>';
		}

		// Output social links
		echo '<div class="site-info-social">';
		if (!empty($instance['facebook'])) {
			echo '<a href="' . esc_url($instance['facebook']) . '" target="_blank">Facebook</a> ';
		}
		if (!empty($instance['twitter'])) {
			echo '<a href="' . esc_url($instance['twitter']) . '" target="_blank">Twitter</a> ';
		}
		if (!empty($instance['instagram'])) {
			echo '<a href="' . esc_url($instance['instagram']) . '" target="_blank">Instagram</a>';
		}
		echo '</div>';

		echo $args['after_widget'];
	}

	public function form($instance) {
		$logo = !empty($instance['logo']) ? esc_url($instance['logo']) : '';
		$info = !empty($instance['info']) ? esc_html($instance['info']) : '';
		$facebook = !empty($instance['facebook']) ? esc_url($instance['facebook']) : '';
		$twitter = !empty($instance['twitter']) ? esc_url($instance['twitter']) : '';
		$instagram = !empty($instance['instagram']) ? esc_url($instance['instagram']) : '';
		?>

		<!-- Logo -->
		<p>
			<label for="<?php echo $this->get_field_id('logo'); ?>"><?php _e('Logo URL:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('logo'); ?>" name="<?php echo $this->get_field_name('logo'); ?>" type="text" value="<?php echo $logo; ?>">
		</p>

		<!-- Info -->
		<p>
			<label for="<?php echo $this->get_field_id('info'); ?>"><?php _e('Site Info:'); ?></label>
			<textarea class="widefat" rows="4" id="<?php echo $this->get_field_id('info'); ?>" name="<?php echo $this->get_field_name('info'); ?>"><?php echo $info; ?></textarea>
		</p>

		<!-- Social Links -->
		<p>
			<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram URL:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" name="<?php echo $this->get_field_name('instagram'); ?>" type="text" value="<?php echo $instagram; ?>">
		</p>

		<?php
	}

	public function update($new_instance, $old_instance) {
		$instance = array();
		$instance['logo'] = (!empty($new_instance['logo'])) ? esc_url_raw($new_instance['logo']) : '';
		$instance['info'] = (!empty($new_instance['info'])) ? sanitize_text_field($new_instance['info']) : '';
		$instance['facebook'] = (!empty($new_instance['facebook'])) ? esc_url_raw($new_instance['facebook']) : '';
		$instance['twitter'] = (!empty($new_instance['twitter'])) ? esc_url_raw($new_instance['twitter']) : '';
		$instance['instagram'] = (!empty($new_instance['instagram'])) ? esc_url_raw($new_instance['instagram']) : '';

		return $instance;
	}
}

// Register widget
function register_site_info_widget() {
	register_widget('Site_Info_Widget');
}
add_action('widgets_init', 'register_site_info_widget');
// filters.php তে রাখতে পারেন অথবা সরাসরি functions.php
add_action('pre_get_posts', 'custom_product_filter');
function custom_product_filter($query) {
    if ( is_admin() || !$query->is_main_query() ) return;

    if ( is_shop() || is_post_type_archive('product') || is_tax('product_cat') ) {
        $meta_query = [];
        $tax_query  = [];

        if (!empty($_GET['skill'])) {
            $meta_query[] = [
                'key' => 'skill_level',
                'value' => sanitize_text_field($_GET['skill']),
                'compare' => '='
            ];
        }

        if (!empty($_GET['price']) && $_GET['price'] === 'free') {
            $meta_query[] = [
                'key' => '_price',
                'value' => '0',
                'type' => 'NUMERIC',
                'compare' => '='
            ];
        }

        if (!empty($_GET['duration'])) {
            $meta_query[] = [
                'key' => 'duration_hours',
                'value' => intval($_GET['duration']),
                'type' => 'NUMERIC',
                'compare' => '>='
            ];
        }

        if (!empty($_GET['course'])) {
            $tax_query[] = [
                'taxonomy' => 'course_type',
                'field'    => 'slug',
                'terms'    => (array) $_GET['course']
            ];
        }

        if (!empty($_GET['instructor'])) {
            $tax_query[] = [
                'taxonomy' => 'instructor',
                'field'    => 'slug',
                'terms'    => (array) $_GET['instructor']
            ];
        }

        if ($meta_query) $query->set('meta_query', $meta_query);
        if ($tax_query)  $query->set('tax_query', array_merge(['relation'=>'AND'], $tax_query));
    }
}
add_action('wp_ajax_wc_ajax_filter', 'wc_ajax_filter_handler');
add_action('wp_ajax_nopriv_wc_ajax_filter', 'wc_ajax_filter_handler');

function wc_ajax_filter_handler(){
    wc_get_template_part('loop'); // loop-product.php বা content-product.php এর ভেতরের লুপ
    wp_die();
}


