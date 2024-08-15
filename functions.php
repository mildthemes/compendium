<?php
/**
 * Set up Compendium theme
 */

if ( ! function_exists( 'compendium_setup' ) ) {
	function compendium_setup() {

		// Add translation
		load_theme_textdomain( 'compendium', get_template_directory() . '/languages' );

		// Enqueue editor stylesheet
		add_editor_style( get_template_directory_uri() . '/assets/css/style.css' );

		// Remove core block patterns, we don't need that
		remove_theme_support( 'core-block-patterns' );

		// Theme notice
		require_once( trailingslashit( get_template_directory() ) . 'includes/theme-notice.php' );


	}
}
add_action( 'after_setup_theme', 'compendium_setup' );

/**
 * Enqueue stylesheet
 */
function compendium_enqueue_stylesheet() {

	wp_enqueue_style( 'compendium-style', get_template_directory_uri() . '/assets/css/style.css', array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'compendium_enqueue_stylesheet' );



/**
 * Enqueue theme notice stylesheet
 */
function compendium_scripts_admin( $hook ) {
	wp_enqueue_style( 'compendium-admin-notice', get_template_directory_uri() . '/admin/css/admin-notice.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'admin_enqueue_scripts', 'compendium_scripts_admin' );

/**
 * Block pattern category
 */
function compendium_register_block_pattern_categories() {

	register_block_pattern_category(
		'compendium-pages',
		array(
			'label'       => __( 'Pages', 'compendium' ),
			'description' => __( 'Full page patterns included with the compendium theme', 'compendium' ),
		)
	);
	register_block_pattern_category(
		'compendium-headers',
		array(
			'label'       => __( 'Headers', 'compendium' ),
			'description' => __( 'Header patterns included with the compendium theme', 'compendium' ),
		)
	);

	register_block_pattern_category(
		'compendium-heroes',
		array(
			'label'       => __( 'Heroes', 'compendium' ),
			'description' => __( 'Hero patterns included with the compendium theme', 'compendium' ),
		)
	);

	register_block_pattern_category(
		'compendium-footers',
		array(
			'label'       => __( 'Footers', 'compendium' ),
			'description' => __( 'Footer patterns included with the compendium theme', 'compendium' ),
		)
	);

	register_block_pattern_category(
		'compendium-posts',
		array(
			'label'       => __( 'Posts', 'compendium' ),
			'description' => __( 'Post patterns included with the compendium theme', 'compendium' ),
		)
	);

	register_block_pattern_category(
		'compendium-portfolios',
		array(
			'label'       => __( 'Portfolios', 'compendium' ),
			'description' => __( 'Portfolio patterns included with the compendium theme', 'compendium' ),
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
		'core/post-navigation-link' => array(
			'nav-block' => __( 'Compendium', 'compendium' ),
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

