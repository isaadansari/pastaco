<?php

global $wp_customize;

if ( vamtam_has_woocommerce() ) {

	$wp_customize->add_setting(
		'vamtam_wc_use_custom_product_gallery_thumbnail_image_size',
		array(
			'default'              => apply_filters( 'vamtam_wc_use_custom_product_gallery_thumbnail_image_size', 'no' ),
			'type'                 => 'option',
			'capability'           => 'manage_woocommerce',
			'sanitize_callback'    => 'wc_bool_to_string',
			'sanitize_js_callback' => 'wc_string_to_bool',
		)
	);

	$wp_customize->add_control(
		'vamtam_wc_use_custom_product_gallery_thumbnail_image_size',
		array(
			'label'    => __( 'Use custom thumbnail size for product\'s gallery.', 'vamtam-elementor-integration' ),
			'section'  => 'woocommerce_product_images',
			'settings' => 'vamtam_wc_use_custom_product_gallery_thumbnail_image_size',
			'type'     => 'checkbox',
		)
	);

	$wp_customize->add_setting(
		'vamtam_wc_product_gallery_thumbnail_image_width',
		array(
			'default'              => 200,
			'type'                 => 'option',
			'capability'           => 'manage_woocommerce',
			'sanitize_callback'    => 'absint',
			'sanitize_js_callback' => 'absint',
		)
	);

	$wp_customize->add_control(
		'vamtam_wc_product_gallery_thumbnail_image_width',
		array(
			'description' => __( 'Max image width used for product\'s gallery thumbnails.', 'vamtam-elementor-integration' ),
			'section'     => 'woocommerce_product_images',
			'settings'    => 'vamtam_wc_product_gallery_thumbnail_image_width',
			'type'        => 'number',
			'input_attrs' => array(
				'min'  => 100,
				'step' => 1,
			),
			'active_callback' => function ( $control ) {
				return 'no' !== $control->manager->get_setting( 'vamtam_wc_use_custom_product_gallery_thumbnail_image_size' )->value();
			},
		)
	);
}
