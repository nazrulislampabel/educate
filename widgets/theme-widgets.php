<?php
function educate_widgets() {
	register_sidebar( array(
		'name'          => __( 'About Us Page', 'educate' ),
		'id'            => 'about-us',
		'description'   => __( 'Widgets in this area will be shown on about us page.', 'educate' ),
		'before_widget' => '<div id="%1$s" class="col-block %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="quarter-top-margin">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Contact Page Maps Section', 'educate' ),
		'id'            => 'contact-maps',
		'description'   => __( 'Widgets in this area will be shown on contact page.', 'educate' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Contact Page Information Section', 'educate' ),
		'id'            => 'contact-info',
		'description'   => __( 'Widgets in this area will be shown on contact page.', 'educate' ),
		'before_widget' => '<div id="%1$s" class="col-block %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="quarter-top-margin">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Before Footer Section', 'educate' ),
		'id'            => 'before-footer',
		'description'   => __( 'before footer section', 'educate' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Section', 'educate' ),
		'id'            => 'footer-right',
		'description'   => __( 'footer section, right side', 'educate' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Bottom Section', 'educate' ),
		'id'            => 'footer-bottom',
		'description'   => __( 'footer section, bottom side', 'educate' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Header Section', 'educate' ),
		'id'            => 'header-section',
		'description'   => __( 'Widgets in this area will be shown on header section.', 'educate' ),
		'before_widget' => '<div id="%1$s" class="%2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );


}

add_action( "widgets_init", "educate_widgets" );