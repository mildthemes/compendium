<?php
/**
 * Set up Compendium theme
 */

if ( ! function_exists( 'compendium_setup' ) ) {
	function compendium_setup() {

		// Add translation
		load_theme_textdomain( 'compendium', get_template_directory() . '/languages' );

		// Enqueue editor stylesheet
		add_editor_style( get_template_directory_uri() . '/style.css' );

		// Remove core block patterns, we don't need that
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'compendium_setup' );

/**
 * Enqueue stylesheet
 */
function compendium_enqueue_stylesheet() {

	wp_enqueue_style( 'compendium', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'compendium_enqueue_stylesheet' );

/**
 * Block pattern category
 */
function compendium_register_block_pattern_categories() {

	register_block_pattern_category(
		'compendium-patterns',
		array(
			'label'       => __( 'Compendium', 'compendium' ),
			'description' => __( 'Patterns included with the compendium theme', 'compendium' ),
		)
	);

}

add_action( 'init', 'compendium_register_block_pattern_categories' );


/**
 * Add block style variations
 */
function compendium_register_block_styles() {

	$block_styles = array(
		'core/query-pagination' => array(
			'pagination-button' => __( 'Compendium', 'compendium' ),
		),
		'core/categories' => array(
			'category-block' => __( 'Compendium', 'compendium' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'compendium_register_block_styles' );

/**
 * Load custom block styles only when the block is used
 */
function compendium_enqueue_custom_block_styles() {

	// Scan the css folder to locate block styles.
	$files = glob( get_template_directory() . '/assets/css/*.css' );

	foreach ( $files as $file ) {

		// Get the filename and core block name.
		$filename   = basename( $file, '.css' );
		$block_name = str_replace( 'core-', 'core/', $filename );

		wp_enqueue_block_style(
			$block_name,
			array(
				'handle' => "compendium-block-{$filename}",
				'src'    => get_theme_file_uri( "assets/css/{$filename}.css" ),
				'path'   => get_theme_file_path( "assets/css/{$filename}.css" ),
			)
		);
	}
}
add_action( 'init', 'compendium_enqueue_custom_block_styles' );