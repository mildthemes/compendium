<?php
/**
 * Title: Hero default
 * Slug: compendium/hero-default
 * Categories: compendium-patterns
 * Keywords: hero
 */
?>

<!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","margin":{"top":"64px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:64px;margin-bottom:32px"><!-- wp:heading {"textAlign":"left","level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","letterSpacing":"-0.5px","lineHeight":"1.65"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color has-large-font-size" style="font-style:normal;font-weight:500;letter-spacing:-0.5px;line-height:1.65"><?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'compendium'); ?></h1>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"secondary","textColor":"base","className":"is-style-fill","style":{"typography":{"fontSize":"14px"},"spacing":{"padding":{"left":"20px","right":"20px","top":"10px","bottom":"10px"}},"border":{"radius":"99px","width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button has-custom-font-size is-style-fill" style="font-size:14px"><a class="wp-block-button__link has-base-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:99px;padding-top:10px;padding-right:20px;padding-bottom:10px;padding-left:20px"><?php echo esc_html__('Read more  →', 'compendium'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->