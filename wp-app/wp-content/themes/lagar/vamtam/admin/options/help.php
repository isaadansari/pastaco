<?php
return array(
	'name' => esc_html__( 'Help', 'lagar' ),
	'auto' => true,
	'config' => array(

		array(
			'name' => esc_html__( 'Help', 'lagar' ),
			'type' => 'title',
			'desc' => '',
		),

		array(
			'name' => esc_html__( 'Help', 'lagar' ),
			'type' => 'start',
			'nosave' => true,
		),
//----
		array(
			'type' => 'docs',
		),

			array(
				'type' => 'end',
			),
	),
);
