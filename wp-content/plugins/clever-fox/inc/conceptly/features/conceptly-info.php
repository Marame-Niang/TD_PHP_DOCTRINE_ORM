<?php 
function conceptly_info_setting( $wp_customize ) {

$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Slider Section Panel
	=========================================*/
		$wp_customize->add_section(
			'info_setting', array(
				'title' => esc_html__( 'Info Section', 'conceptly-pro' ),
				'panel' => 'conceptly_frontpage_sections',
				'priority' => apply_filters( 'conceptly_section_priority', 10, 'conceptly_info' ),
			)
		);
	// info Hide/ Show Setting // 
	$wp_customize->add_setting( 
		'hide_show_info' , 
			array(
			'default' => esc_html__( '1', 'conceptly-pro' ),
			'capability' => 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		) 
	);
	
	$wp_customize->add_control( new Conceptly_Customizer_Toggle_Control( $wp_customize, 
	'hide_show_info', 
		array(
			'label'	      => esc_html__( 'Hide / Show Section', 'conceptly-pro' ),
			'section'     => 'info_setting',
			'settings'    => 'hide_show_info',
			'type'        => 'ios', // light, ios, flat
		) 
	));
	/*=========================================
	Info contents Section first
	=========================================*/	
	// info icon // 

	$wp_customize->add_setting(
    	'infos_first_icon_setting',
    	array(
	        'default'			=> 'fa-pencil',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( new Conceptly_Icon_Picker_Control($wp_customize,
		'infos_first_icon_setting',
		array(
		    'label'   => __('Info Icon','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'infos_first_icon_setting',
			'iconset' => 'fa',
		) ) 
	);
	
	// info title //
	$wp_customize->add_setting(
    	'info_title',
    	array(
	        'default'			=> __('10/45 Beer Street Heaven','conceptly-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	
	$wp_customize->add_control( 
		'info_title',
		array(
		    'label'   => __('Title','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'info_title',
			'type' => 'text',
			'description'    => __('', 'conceptly-pro' ),
		)  
	);
	
	// info Description //
	$wp_customize->add_setting(
    	'info_description',
    	array(
	        'default'			=> __('California Floor, USA 1208','conceptly-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	
	$wp_customize->add_control( 
		'info_description',
		array(
		    'label'   => __('Description','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'info_description',
			'type' => 'text',
		)  
	);
	
	/*=========================================
	Info contents Section second
	=========================================*/	
	// info icon // 

	$wp_customize->add_setting(
    	'infos_second_icon_setting',
    	array(
	        'default'			=> 'fa-refresh',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( new Conceptly_Icon_Picker_Control($wp_customize,
		'infos_second_icon_setting',
		array(
		    'label'   => __('Info Icon','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'infos_second_icon_setting',
			'iconset' => 'fa',
		) ) 
	);
	
	// info title //
	$wp_customize->add_setting(
    	'info_title2',
    	array(
	        'default'			=> __('+001-2156-2459','conceptly-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	
	$wp_customize->add_control( 
		'info_title2',
		array(
		    'label'   => __('Title','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'info_title2',
			'type' => 'text',
		)  
	);
	
	// info Description //
	$wp_customize->add_setting(
    	'info_description2',
    	array(
	        'default'			=> __('example@mail.com','conceptly-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	
	$wp_customize->add_control( 
		'info_description2',
		array(
		    'label'   => __('Description','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'info_description2',
			'type' => 'text',
			'description'    => __('', 'conceptly-pro' ),
		)  
	);
	
	/*=========================================
	Info contents Section third
	=========================================*/	
	// info icon // 

	$wp_customize->add_setting(
    	'infos_third_icon_setting',
    	array(
	        'default'			=> 'fa-home',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
		)
	);	

	$wp_customize->add_control( new Conceptly_Icon_Picker_Control($wp_customize,
		'infos_third_icon_setting',
		array(
		    'label'   => __('Info Icon','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'infos_third_icon_setting',
			'iconset' => 'fa',
		) ) 
	);
	
	// info title //
	$wp_customize->add_setting(
    	'info_title3',
    	array(
	        'default'			=> __('Free Delivery','conceptly-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	
	$wp_customize->add_control( 
		'info_title3',
		array(
		    'label'   => __('Title','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'info_title3',
			'type' => 'text',
		)  
	);
	
	// info Description //
	$wp_customize->add_setting(
    	'info_description3',
    	array(
	        'default'			=> __('On order over $57.00','conceptly-pro'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => $selective_refresh,
		)
	);
	
	$wp_customize->add_control( 
		'info_description3',
		array(
		    'label'   => __('Description','conceptly-pro'),
		    'section' => 'info_setting',
			'settings'=> 'info_description3',
			'type' => 'text',
		)  
	);
	
}
add_action( 'customize_register', 'conceptly_info_setting' );

/**
 * Add selective refresh for Front page section section controls.
 */
function conceptly_home_info_section_partials( $wp_customize ){
	
	// hide_show_info
	$wp_customize->selective_refresh->add_partial(
		'hide_show_info', array(
			'selector' => '#contact',
			'container_inclusive' => true,
			'render_callback' => 'info_setting',
			'fallback_refresh' => true,
		)
	);
	
	//info  section first
	$wp_customize->selective_refresh->add_partial( 'info_title', array(
		'selector'            => '#contact .info-first b',
		'settings'            => 'info_title',
		'render_callback'  => 'conceptly_info_section_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'infos_first_img_setting', array(
		'selector'            => '#contact .info-first',
		'settings'            => 'infos_first_img_setting',
		'render_callback'  => 'conceptly_info_section_img_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'info_description', array(
		'selector'            => '#contact .info-first span',
		'settings'            => 'info_description',
		'render_callback'  => 'conceptly_info_section_description_render_callback',
	
	) );
// info second	
	$wp_customize->selective_refresh->add_partial( 'info_title2', array(
		'selector'            => '#contact .info-second b',
		'settings'            => 'info_title2',
		'render_callback'  => 'info_second_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'infos_second_img_setting', array(
		'selector'            => '#contact .info-second',
		'settings'            => 'infos_second_img_setting',
		'render_callback'  => 'info_second_img_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'info_description2', array(
		'selector'            => '#contact .info-second span',
		'settings'            => 'info_description2',
		'render_callback'  => 'info_second_description_render_callback',
	
	) );
	// info third	
	$wp_customize->selective_refresh->add_partial( 'info_title3', array(
		'selector'            => '#contact .info-third b',
		'settings'            => 'info_title3',
		'render_callback'  => 'info_third_title_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'infos_third_img_setting', array(
		'selector'            => '#contact .info-third ',
		'settings'            => 'infos_third_img_setting',
		'render_callback'  => 'info_third_img_render_callback',
	
	) );
	
	$wp_customize->selective_refresh->add_partial( 'info_description3', array(
		'selector'            => '#contact .info-third span',
		'settings'            => 'info_description3',
		'render_callback'  => 'info_third_description_render_callback',
	
	) );
	
}

add_action( 'customize_register', 'conceptly_home_info_section_partials' );
// info first
function conceptly_info_section_title_render_callback() {
	return get_theme_mod( 'info_title' );
}
function conceptly_info_section_img_render_callback() {
	return get_theme_mod( 'infos_first_img_setting' );
}

function conceptly_info_section_description_render_callback() {
	return get_theme_mod( 'info_description' );
}
// info second
function info_second_title_render_callback() {
	return get_theme_mod( 'info_title2' );
}
function info_second_img_render_callback() {
	return get_theme_mod( 'infos_second_img_setting' );
}

function info_second_description_render_callback() {
	return get_theme_mod( 'info_description2' );
}	
// info third
function info_third_title_render_callback() {
	return get_theme_mod( 'info_title3' );
}
function info_third_img_render_callback() {
	return get_theme_mod( 'infos_third_img_setting' );
}

function info_third_description_render_callback() {
	return get_theme_mod( 'info_description3' );
}
