<?php 
/**
 * Title: Recent posts
 * Slug: compendium/recent-posts
 * Categories: compendium-patterns
 * Keywords: recent, latest, posts
 */
?>
<!-- wp:group {"metadata":{"name":"Recent Posts"},"style":{"spacing":{"blockGap":"0","margin":{"top":"64px","bottom":"32px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:64px;margin-bottom:32px"><!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"1.6px","fontSize":"14px"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-text-align-left has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:1.6px;line-height:1;text-transform:uppercase"><?php echo esc_html__('Recent Posts ¬', 'compendium'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"tagName":"main","metadata":{"categories":["compendium-patterns"],"patternName":"compendium/posts","name":"Posts"},"className":"is-style-posts","style":{"spacing":{"margin":{"top":"32px"},"padding":{"top":"var:preset|spacing|x-small","bottom":"0","left":"0","right":"0"}},"border":{"radius":"4px","top":{"radius":"4px","width":"1px","color":"var:preset|color|contrast"},"right":{"radius":"4px","width":"1px","color":"var:preset|color|contrast"},"bottom":{"radius":"4px","width":"0px","style":"none"},"left":{"radius":"4px","width":"1px","color":"var:preset|color|contrast"}}}} -->
<main class="wp-block-group is-style-posts" style="border-radius:4px;border-top-color:var(--wp--preset--color--contrast);border-top-width:1px;border-right-color:var(--wp--preset--color--contrast);border-right-width:1px;border-bottom-style:none;border-bottom-width:0px;border-left-color:var(--wp--preset--color--contrast);border-left-width:1px;margin-top:32px;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":"4"},"className":"compendium-posts","layout":{"type":"default"}} -->
<div class="wp-block-query compendium-posts"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"default","columnCount":"2","minimumColumnWidth":null}} -->
<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"0px","padding":{"top":"0","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0px","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<header class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--contrast);border-bottom-width:1px;margin-top:0px;margin-bottom:0px;padding-top:0;padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"lineHeight":"1.5"}},"fontSize":"small"} /-->

<!-- wp:post-date {"textAlign":"right","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"14px","textTransform":"uppercase","letterSpacing":"1px"},"spacing":{"margin":{"top":"5px","bottom":"5px"}},"layout":{"columnSpan":1,"rowSpan":1}},"textColor":"primary"} /--></header>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->