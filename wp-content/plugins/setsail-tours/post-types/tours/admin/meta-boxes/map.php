<?php

if ( ! function_exists( 'setsail_tours_general_cpt_meta_boxes' ) ) {
	function setsail_tours_general_cpt_meta_boxes() {
		
		$tour_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'General Settings', 'setsail-tours' ),
				'name'  => 'tour_meta_box'
			)
		);
		
		setsail_select_create_meta_box_field (
			array(
				'name'          => 'qodef_tour_item_is_featured_meta',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Item Is Featured', 'setsail-tours' ),
				'parent'        => $tour_meta_box
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_general_cpt_meta_boxes' );
}

if ( ! function_exists( 'setsail_tours_info_section_map' ) ) {
	
	function setsail_tours_info_section_map() {
		$destinations = setsail_tours_get_destinations( true );
		
		$info_section_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'Info Section', 'setsail-tours' ),
				'name'  => 'tours_info_section_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_info_section',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Info Section', 'setsail-tours' ),
				'parent'        => $info_section_meta_box
			)
		);
		
		$info_section_container = setsail_select_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'info_section_container',
				'parent'     => $info_section_meta_box,
				'dependency' => array(
					'show' => array(
						'tour_show_info_section' => 'yes'
					)
				)
			)
		);
		
		
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_destination',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Reiseform', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_departure',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Erlebnisse', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_departure_time',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Reisedauer', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_return_time',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Reisebeginn', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_dress_code',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Reiseroute', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_price',
				'type'          => 'textareahtml',
				'default_value' => '',
				'label'         => esc_html__( 'Reisepreis', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_discount_price',
				'type'          => 'textareahtml',
				'default_value' => '',
				'label'         => esc_html__( 'Highlights', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_custom_label',
				'type'          => 'textareahtml',
				'default_value' => '',
				'label'         => esc_html__( 'Notiz', 'setsail-tours' ),
				'parent'        => $info_section_container
			)
		);
	
		
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_info_section_map' );
}

if ( ! function_exists( 'setsail_tours_tour_plan_section_map' ) ) {
	function setsail_tours_tour_plan_section_map() {
		
		$tour_plan_section_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'PROGRAMM', 'setsail-tours' ),
				'name'  => 'tours_plan_section_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_plan_section',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show PROGRAMM Section', 'setsail-tours' ),
				'parent'        => $tour_plan_section_meta_box
			)
		);
		
		$tour_plan_section_container = setsail_select_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'tour_plan_section_container',
				'parent'     => $tour_plan_section_meta_box,
				'dependency' => array(
					'show' => array(
						'tour_show_plan_section' => 'yes'
					)
				)
			)
		);
		
		setsail_select_add_repeater_field(
			array(
				'name'        => 'tour_plan_repeater',
				'parent'      => $tour_plan_section_container,
				'button_text' => esc_html__( 'Add new PROGRAMM Section', 'setsail-tours' ),
				'fields'      => array(
					array(
						'type'        => 'text',
						'name'        => 'tour_plan_section_title',
						'label'       => esc_html__( 'PROGRAMM Section Title', 'setsail-tours' ),
						'description' => esc_html__( 'Description', 'setsail-tours' )
					),
					array(
						'type'        => 'textareahtml',
						'name'        => 'tour_plan_section_description',
						'label'       => esc_html__( 'PROGRAMM Section Description', 'setsail-tours' ),
						'description' => esc_html__( 'Description field', 'setsail-tours' )
					)
				)
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_tour_plan_section_map' );
}

if ( ! function_exists( 'setsail_tours_location_section_map' ) ) {
	function setsail_tours_location_section_map() {
		
		$location_section_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'Location Section', 'setsail-tours' ),
				'name'  => 'location_section_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_location_section',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Location Section', 'setsail-tours' ),
				'parent'        => $location_section_meta_box
			)
		);
		
		$location_section_container = setsail_select_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'location_section_container',
				'parent'     => $location_section_meta_box,
				'dependency' => array(
					'show' => array(
						'tour_show_location_section' => 'yes'
					)
				)
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_location_content',
				'type'          => 'textareahtml',
				'default_value' => '',
				'label'         => esc_html__( 'Location Content', 'setsail-tours' ),
				'parent'        => $location_section_container
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_location_section_map' );
}

if ( ! function_exists( 'setsail_tours_gallery_section_map' ) ) {
	function setsail_tours_gallery_section_map() {
		
		$gallery_section_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'Gallery Section', 'setsail-tours' ),
				'name'  => 'gallery_section_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_gallery_section',
				'type'          => 'yesno',
				'default_value' => 'yes',
				'label'         => esc_html__( 'Show Gallery Section', 'setsail-tours' ),
				'parent'        => $gallery_section_meta_box
			)
		);
		
		$gallery_section_container = setsail_select_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'gallery_section_container',
				'parent'     => $gallery_section_meta_box,
				'dependency' => array(
					'show' => array(
						'tour_show_gallery_section' => 'yes'
					)
				)
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_gallery_excerpt',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Excerpt', 'setsail-tours' ),
				'parent'        => $gallery_section_container
			)
		);
		
		setsail_select_add_multiple_images_field(
			array(
				'parent'      => $gallery_section_container,
				'name'        => 'tour_gallery_images',
				'label'       => esc_html__( 'Gallery Images', 'setsail-tours' ),
				'description' => esc_html__( 'Choose your gallery images', 'setsail-tours' )
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_gallery_section_map' );
}

if ( ! function_exists( 'setsail_tours_review_section_map' ) ) {
	function setsail_tours_review_section_map() {
		
		$review_section_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'Review Section', 'setsail-tours' ),
				'name'  => 'review_section_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_review_section',
				'type'          => 'yesno',
				'label'         => esc_html__( 'Show Review Section', 'setsail-tours' ),
				'parent'        => $review_section_meta_box,
				'default_value' => 'yes'
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_review_section_map' );
}

if ( ! function_exists( 'setsail_tours_custom_section_1_map' ) ) {
	function setsail_tours_custom_section_1_map() {
		
		$custom_section_1_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'Custom Section 1', 'setsail-tours' ),
				'name'  => 'custom_section_1_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_custom_section_1',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Custom Section 1', 'setsail-tours' ),
				'parent'        => $custom_section_1_meta_box
			)
		);
		
		$custom_section_1_container = setsail_select_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'custom_section_1_container',
				'parent'     => $custom_section_1_meta_box,
				'dependency' => array(
					'show' => array(
						'tour_show_custom_section_1' => 'yes'
					)
				)
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_custom_section1_title',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Title', 'setsail-tours' ),
				'parent'        => $custom_section_1_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_custom_section1_content',
				'type'          => 'textareahtml',
				'default_value' => '',
				'label'         => esc_html__( 'Content', 'setsail-tours' ),
				'parent'        => $custom_section_1_container
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_custom_section_1_map' );
}

if ( ! function_exists( 'setsail_tours_custom_section_2_map' ) ) {
	function setsail_tours_custom_section_2_map() {
		
		$custom_section_2_meta_box = setsail_select_create_meta_box(
			array(
				'scope' => array( 'tour-item' ),
				'title' => esc_html__( 'Custom Section 2', 'setsail-tours' ),
				'name'  => 'custom_section_2_meta'
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_show_custom_section_2',
				'type'          => 'yesno',
				'default_value' => 'no',
				'label'         => esc_html__( 'Show Custom Section 2', 'setsail-tours' ),
				'parent'        => $custom_section_2_meta_box
			)
		);
		
		$custom_section_2_container = setsail_select_add_admin_container_no_style(
			array(
				'type'       => 'container',
				'name'       => 'custom_section_2_container',
				'parent'     => $custom_section_2_meta_box,
				'dependency' => array(
					'show' => array(
						'tour_show_custom_section_2' => 'yes'
					)
				)
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_custom_section2_title',
				'type'          => 'text',
				'default_value' => '',
				'label'         => esc_html__( 'Title', 'setsail-tours' ),
				'parent'        => $custom_section_2_container
			)
		);
		
		setsail_select_create_meta_box_field(
			array(
				'name'          => 'tour_custom_section2_content',
				'type'          => 'textareahtml',
				'default_value' => '',
				'label'         => esc_html__( 'Content', 'setsail-tours' ),
				'parent'        => $custom_section_2_container
			)
		);
	}
	
	add_action( 'setsail_select_action_meta_boxes_map', 'setsail_tours_custom_section_2_map' );
}