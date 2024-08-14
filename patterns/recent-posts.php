<?php 
/**
 * Title: Recent posts
 * Slug: compendium/recent-posts
 * Categories: compendium-posts
 * Keywords: recent, latest, posts
 */
?>
<!-- wp:group {"metadata":{"name":"Recent Posts","categories":["compendium-posts"],"patternName":"compendium/recent-posts"},"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:64px"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"1.6px","fontSize":"14px"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:1.6px;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Recent Posts ¬', 'compendium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"main","metadata":{"categories":["compendium-patterns"],"patternName":"compendium/posts","name":"Posts"},"style":{"spacing":{"margin":{"top":"32px"},"padding":{"top":"0","bottom":"0px","left":"0","right":"0"}},"border":{"radius":"4px","width":"0px","style":"none"}}} -->
<main class="wp-block-group" style="border-style:none;border-width:0px;border-radius:4px;margin-top:32px;padding-top:0;padding-right:0;padding-bottom:0px;padding-left:0"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":"4"},"enhancedPagination":true,"className":"cmb-query","layout":{"type":"default"}} -->
<div class="wp-block-query cmb-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":"1.5"}},"layout":{"type":"default","columnCount":"2","minimumColumnWidth":null}} -->
<!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"},"border":{"style":"none","width":"0px"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<header class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"textAlign":"right","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontSize":"12px"},"spacing":{"margin":{"top":"5px","bottom":"5px"}}},"textColor":"primary"} /--></div>
<!-- /wp:group --></header>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->