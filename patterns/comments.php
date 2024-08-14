<?php
/**
 * Title: Comments section and form
 * Slug: compendium/comments
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Comments"},"className":"entry-comments","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0px"},"blockGap":"0","padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
<section class="wp-block-group entry-comments" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0px;padding-top:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small)"><!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"lineHeight":"1","textTransform":"uppercase","fontStyle":"normal","fontWeight":"600","letterSpacing":"1.6px","fontSize":"14px"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary"} -->
<h2 class="wp-block-heading has-secondary-color has-text-color has-link-color" style="font-size:14px;font-style:normal;font-weight:600;letter-spacing:1.6px;line-height:1;text-transform:uppercase"><?php echo esc_html__( 'Comments ¬', 'compendium' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"level":3,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0px","bottom":"32px"}},"typography":{"fontSize":"14px"}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:comment-template {"fontSize":"x-small"} -->
<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|small"},"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"}},"border":{"radius":"4px","width":"1px"}},"borderColor":"contrast","layout":{"type":"default"}} -->
<article class="wp-block-group has-border-color has-contrast-border-color" style="border-width:1px;border-radius:4px;margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<header class="wp-block-group"><!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary","fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex"}} -->
<div class="wp-block-group"><!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /-->

<!-- wp:comment-edit-link {"fontSize":"x-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:comment-reply-link /--></article>
<!-- /wp:group -->
<!-- /wp:comment-template --></div>
<!-- /wp:group --></div>
<!-- /wp:comments -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></section>
<!-- /wp:group -->