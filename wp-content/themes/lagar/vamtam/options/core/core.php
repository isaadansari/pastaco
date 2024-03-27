<?php

/**
 * Controls attached to core sections
 *
 * @package vamtam/lagar
 */


return array(
	array(
		'label'     => esc_html__( 'Header Logo Type', 'lagar' ),
		'id'        => 'header-logo-type',
		'type'      => 'switch',
		'transport' => 'postMessage',
		'section'   => 'title_tagline',
		'choices'   => array(
			'image'      => esc_html__( 'Image', 'lagar' ),
			'site-title' => esc_html__( 'Site Title', 'lagar' ),
		),
		'priority' => 8,
	),
);


