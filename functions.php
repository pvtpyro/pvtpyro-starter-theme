<?php

/** styles */
function pp_custom_theme_styles() {
	wp_enqueue_style(
		'style', // handle. a unique name
		get_template_directory_uri() . '/style.css', // path to file
		[], // dependencies
		'1.0.0', // version
		'all' // media
	);
}
add_action('wp_enqueue_scripts', 'pp_custom_theme_styles');

/** scripts */
function pp_custom_theme_scripts() {
	wp_enqueue_script(
		'main', // handle. a uniqe name
		get_template_directory_uri() . '/js/theme.js', // path to file
		[], // dependencies
		'1.0.0', // version
		true // array of args, or bool that determins if it should go in the footer
	);
}
add_action('wp_enqueue_scripts', 'pp_custom_theme_scripts');


// script to register styles
function pp_custom_block_styles() {
    wp_enqueue_script(
        'custom-block-styles',
        get_template_directory_uri() . '/js/block-styles.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		filemtime( get_template_directory() . '/js/block-styles.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'pp_custom_block_styles' );

// load in separate css files for each block type
function pp_custom_block_styles_css() {
	$blocks = ['table', 'list'];
	foreach($blocks as $block) {
		wp_enqueue_block_style( "core/$block", array(
			"handle" => "custom-$block",
			"src"    => get_theme_file_uri( "css/blocks/$block.css" ),
		) );
	}
}
add_action( 'after_setup_theme', 'pp_custom_block_styles_css' );

// only load block assets if the block is being used
add_filter( 'should_load_separate_core_block_assets', '__return_true' );

function pp_theme_menus()
{
	register_nav_menus(
		array(
			//duplicate line below and rename for more menus. IE footer, sidebar
			'primary' => __('Primary Navigation', 'pp')
		)
	);
}
add_action('init', 'pp_theme_menus');