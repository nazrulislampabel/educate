<?php

Kirki::add_config( 'my_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

// Add Panel: Global Settings
Kirki::add_panel( 'global_settings', array(
	'title'    => __( 'Global Settings', 'educate' ),
	'priority' => 10,
) );

// Logo Section
Kirki::add_section( 'logo_section', array(
	'title'    => __( 'Logo Settings', 'educate' ),
	'panel'    => 'global_settings',
	'priority' => 1,
) );
// Normal Logo Upload with Live Preview
Kirki::add_field( 'educate', [
	'type'      => 'image',
	'settings'  => 'normal_logo',
	'label'     => esc_html__( 'Normal Logo', 'educate' ),
	'section'   => 'logo_section',
	'default'   => '',
	'transport' => 'postMessage', // live preview
	'choices'   => [
		'save_as' => 'url',
	],
] );

// Sticky Logo Upload with Live Preview
Kirki::add_field( 'educate', [
	'type'      => 'image',
	'settings'  => 'sticky_logo',
	'label'     => esc_html__( 'Sticky Logo', 'educate' ),
	'section'   => 'logo_section',
	'default'   => '',
	'transport' => 'postMessage',
	'choices'   => [
		'save_as' => 'url',
	],
] );