<?php
/**
 * Compendium theme admin notice function
 */
function compendium_theme_admin_notice() {

	global $current_user;
    $compendium_theme = wp_get_theme();
	$user_id = $current_user->ID;

	if ( ! get_user_meta( $user_id, 'compendium_hide_admin_notice' ) ) : ?>
	<div id="message" class="notice notice-success mild-themes-notice mild-themes-welcome-notice">
		<a class="mild-themes-message-close notice-dismiss" href="?compendium_hide_admin_notice=0"></a>

		<div class="mild-themes-message-content">
			<div class="mild-themes-message-image">
			
				<a href="<?php echo esc_url( $compendium_theme->get( 'ThemeURI' ) );?>"><img class="mild-themes-screenshot" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png" alt="<?php printf( esc_html__( '%s', 'compendium' ), $compendium_theme->get( 'Name' ) ); ?>" /></a>
			</div>

			<div class="mild-themes-message-text">
				<h2 class="mild-themes-message-heading">
				<?php printf( esc_html__( 'Thank you for downloading %s', 'compendium' ), $compendium_theme->get( 'Name' ) ); ?>	
				</h2>
				<?php
				echo '<p>';
					printf( __( 'Unlock all the features, patterns, color palettes, and font pairings by upgrading to <a target="_blank" rel="noopener" href="%1$s">Compendium Pro</a>.', 'compendium' ), esc_url( $compendium_theme->get( 'ThemeURI' ) ) );
				echo '</p>';

				echo '<p class="notice-buttons">';
	
				echo ' <a href="' . esc_url( admin_url( 'site-editor.php' ) ) . '" target="_blank" rel="noopener" class="button button-secondary mild-themes-button"><span class="dashicons dashicons-admin-customizer"></span> ';
				echo esc_html__( 'Customize', 'compendium' );
				echo '</a>';

				echo '<a href="'. esc_url( $compendium_theme->get( 'ThemeURI' ) ) .'" target="_blank" rel="noopener" class="button button-primary mild-themes-button"><span class="dashicons dashicons-megaphone"></span> ';
				echo esc_html__( 'Go Pro!', 'compendium' );
				echo '</a>';
			
				echo '</p>';
				?>
			</div><!-- .mild-themes-message-text -->
		</div><!-- .mild-themes-message-content -->
	</div><!-- #message -->

	<?php
	endif;
}

add_action( 'admin_notices', 'compendium_theme_admin_notice' );

/**
 * Compendium theme admin dismiss notice function
 */
function compendium_dismiss_admin_notice() {
	global $current_user;
	$user_id = $current_user->ID;

	// Once dismissed, the user meta is updated 
	if ( isset( $_GET['compendium_hide_admin_notice'] ) && '0' === $_GET['compendium_hide_admin_notice'] ) {
		add_user_meta( $user_id, 'compendium_hide_admin_notice', 'true', true );
	}
}
add_action( 'admin_init', 'compendium_dismiss_admin_notice' );