<?php
add_action( 'cmb2_init', 'educate_add_metabox' );
function educate_add_metabox() {

	$cmb = new_cmb2_box( array(
		'id'           => 'homepage-metabox',
		'title'        => __( 'Home Page Options', 'cmb2' ),
		'object_types' => array( 'options-page' ),
		'option_key'   => 'theme_options',
	) );
	$cmb->add_field( array(
		'name' => __( 'Hero section', 'educate' ),
		'id' => 'hero',
		'type' => 'group',
		'expand' => 'true',
		'description'=>__('Add your slider','cmb2'),
		'options'=>array(
			'group_title'=>__('slider{#}','cmb2'),
			'add_button'=>__('Add Another Slider','cmb2'),
			'remove_button'=>__('Remove Slider','cmb2'),
			'sortable'=>true,
			'closed'=>true,
		)
	) );
	$cmb->add_group_field('hero', array(
		'name' => __( 'Single hero Image', 'educate' ),
		'id' => 'hero-image',
		'type' => 'file',
	) );

	$cmb->add_group_field('hero', array(
		'name' => __( 'Hero sub title', 'educate' ),
		'id' => 'hero-sub-title',
		'type' => 'text',
	) );

	$cmb->add_group_field('hero', array(
		'name' => __( 'Hero heading', 'educate' ),
		'id' => 'hero-heading',
		'type' => 'text',
	) );
	$cmb->add_group_field('hero', array(
		'name' => __( 'Hero Button Text', 'educate' ),
		'id' => 'hero-button-text',
		'type' => 'text',
	) );
	$cmb->add_group_field('hero', array(
		'name' => __( 'Hero Button Url', 'educate' ),
		'id' => 'hero-button-url',
		'type' => 'text_url',
	) );
	//Features Section
	$cmb->add_field( array(
		'name' => __( 'Feature section', 'educate' ),
		'id' => 'feature',
		'type' => 'group',
		'description'=>__('Add your Three Feature','cmb2'),
		'options'=>array(
			'group_title'=>__('Feature{#}','cmb2'),
			'add_button'=>__('Add Another Feature','cmb2'),
			'remove_button'=>__('Remove Feature','cmb2'),
			'sortable'=>true,
			'closed'=>true,
			'attributes' => array(
				'data-max' => 3, // JS limit-এর জন্য
			)
		)
	) );
	$cmb->add_group_field('feature', array(
		'name' => __( 'Feature icon', 'educate' ),
		'id' => 'feature-icon',
		'type' => 'select',
		'options' => array(
			'fa fa-solid fa-book'      => 'Book',
			'fa fa-solid fa-cog'     => 'Gear',
			'fa fa-address-book' => 'Address',
		),
	) );

	$cmb->add_group_field('feature', array(
		'name' => __( 'Feature Heading', 'educate' ),
		'id' => 'feature-heading',
		'type' => 'text',
	) );

	$cmb->add_group_field('feature', array(
		'name' => __( 'Feature description', 'educate' ),
		'id' => 'f-des',
		'type' => 'text',
	) );

	//CTA Section
	$cmb->add_field( array(
		'name' => __( 'CTA section', 'educate' ),
		'id' => 'cta',
		'type' => 'group',
		'repeatable' => false,
		'options'=>array(
			'group_title'=>__('Added Your CTA','cmb2'),
			'des'=>__('Remove Feature','cmb2'),
			'sortable'=>true,
			'closed'=>true,
			)
	) );
	$cmb->add_group_field('cta', array(
		'name' => __( 'CTA Title', 'educate' ),
		'id' => 'cta-head',
		'type' => 'text',
	) );
	$cmb->add_group_field('cta', array(
		'name' => __( 'CTA Sub Title', 'educate' ),
		'id' => 'sub-title',
		'type' => 'textarea_small',
	) );
	$cmb->add_group_field('cta', array(
		'name' => __( 'Button Text', 'educate' ),
		'id' => 'cta-button',
		'type' => 'text',
	) );
	$cmb->add_group_field('cta', array(
		'name' => __( 'Button Url', 'educate' ),
		'id' => 'cta-url',
		'type' => 'text_url',
	) );

	// FAQ
	$cmb->add_field( array(
		'name' => __( 'FAQ', 'educate' ),
		'id'   => 'faq_list',
		'type' => 'group',
		'description' => __( 'Add Your Faq section', 'educate' ),
		'options' => array(
			'group_title'    => __( 'FAQ {#}', 'educate' ),
			'add_button'     => __( 'Add Another FAQ', 'educate' ),
			'remove_button'  => __( 'Remove FAQ', 'educate' ),
			'sortable'       => true,
			'closed'=>true,
		),
	) );

	$cmb->add_group_field( 'faq_list', array(
		'name' => __( 'Question', 'educate' ),
		'id'   => 'faq_question',
		'type' => 'text',
	) );

	$cmb->add_group_field( 'faq_list', array(
		'name' => __( 'Answer', 'educate' ),
		'id'   => 'faq_answer',
		'type' => 'textarea_small',
	) );
// FAQ Section Image
	$cmb->add_field( array(
		'name' => __( 'FAQ Right Side Image', 'educate' ),
		'id'   => 'faq_image',
		'type' => 'file',
	) );
	$cmb->add_field( array(
		'name' => __( 'FAQ Video link', 'educate' ),
		'id'   => 'faq_link',
		'type' => 'text_url',
	) );

	// FAQ
	$cmb->add_field( array(
		'name' => __( 'Testimonial', 'educate' ),
		'id'   => 'test_list',
		'type' => 'group',
		'description' => __( 'Add Your Testimonial section', 'educate' ),
		'options' => array(
			'group_title'    => __( 'Testimonial {#}', 'educate' ),
			'add_button'     => __( 'Add Another Testimonial', 'educate' ),
			'remove_button'  => __( 'Remove Testimonial', 'educate' ),
			'sortable'       => true,
			'closed'=>true,
		),
	) );

	$cmb->add_group_field( 'test_list', array(
		'name' => __( 'Client name', 'educate' ),
		'id'   => 'client',
		'type' => 'text',
	) );
	$cmb->add_group_field( 'test_list', array(
		'name' => __( 'Client image', 'educate' ),
		'id'   => 'client_img',
		'type' => 'file',
	) );
	$cmb->add_group_field( 'test_list', array(
		'name' => __( 'Client Designation', 'educate' ),
		'id'   => 'client_pos',
		'type' => 'text',
	) );
	$cmb->add_group_field( 'test_list', array(
		'name' => __( 'Client Feedback', 'educate' ),
		'id'   => 'client_fd',
		'type' => 'textarea_small',
	) );
// Testimonial Section Image
	$cmb->add_field( array(
		'name' => __( 'Testimonial Background Image', 'educate' ),
		'id'   => 'test_bg_image',
		'type' => 'file',
	) );
	$cmb = new_cmb2_box( array(
		'id'            =>'edit',
		'title'         => __( 'Category Extra Fields', 'cmb2' ),
		'object_types'  => array( 'term' ), // টার্গেট করবো টার্ম
		'taxonomies'    => array( 'product_cat' ), // শুধু product_cat এর জন্য
		'new_term_section' => true,
	) );

	$cmb->add_field( array(
		'name' => __( 'Icon Image', 'cmb2' ),
		'id'   =>'icon',
		'type' => 'file',
		'options' => array(
			'url' => false, // Hide the text input for the url
		),
		'text'    => array(
			'add_upload_file_text' => 'Add Icon Image' // Change upload button text. Default: "Add or Upload File"
		),
		'query_args' => array(
			'type' => array(
				'image/jpeg',
				'image/png',
			),
		),
		'preview_size' => 'thumbnail',
	) );
}

add_action('cmb2_admin_init', function() {
	$cmb = new_cmb2_box( array(
		'id'           => 'lesson_metabox',
		'title'        => 'Lesson Details',
		'object_types' => array('lesson'),
	) );

	$cmb->add_field( array(
		'name'             => 'Select Course',
		'id'               => 'parent_course_id',
		'type'             => 'select',
		'options_cb'       => 'get_course_options',
		'show_option_none' => true,
	) );
    $cmb = new_cmb2_box([
        'id' => 'product_metabox',
        'title' => 'Product Details',
        'object_types' => ['product'],
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true,
    ]);

    $cmb->add_field([
        'name' => 'Skill Level',
        'id' => 'skill_level',
        'type' => 'select',
        'options' => [
            'beginner' => 'Beginner',
            'intermediate' => 'Intermediate',
            'expert' => 'Expert',
        ],
    ]);

    $cmb->add_field([
        'name'    => 'Duration Hours',
        'id'      => 'duration_hours',
        'type'    => 'select',
        'options' => [
            '5'  => '5+ hours (30)',
            '10' => '10+ hours (20)',
            '15' => '15+ hours (5)',
        ],
        'default' => '5',
        'desc'    => 'Select course duration',
    ]);
});

function get_course_options() {
	$courses = get_posts(array(
		'post_type'      => 'course',
		'posts_per_page' => -1,
		'post_status'    => 'publish',
	));
	$options = [];
	foreach($courses as $course) {
		$options[$course->ID] = $course->post_title;
	}
	return $options;
}