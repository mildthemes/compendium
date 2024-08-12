<?php
/**
 * Title: 404 page
 * Slug: compendium/404
 * Inserter: no
 * Categories: compendium-patterns
 */
?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:0;padding-top:40px;padding-bottom:40px"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"left","level":1} -->
<h1 class="wp-block-heading has-text-align-left"><?php echo esc_html__( 'Error 404, page not found', 'compendium' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place. Please try searching using the form below.', 'compendium' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:search {"showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","align":"center","fontSize":"small"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->