<?php
/**
 * Title: Posts with pagination
 * Slug: compendium/posts
 * Categories: compendium-posts
 * Keywords: blog, posts, pagination
 */
?>
<!-- wp:group {"tagName":"main","metadata":{"name":"Posts with pagination"},"className":"is-style-posts","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group is-style-posts" style="margin-top:0;padding-top:0px;padding-bottom:0px"><!-- wp:group {"tagName":"main","metadata":{"categories":["compendium-patterns"],"patternName":"compendium/posts","name":"Posts"},"style":{"spacing":{"margin":{"top":"32px"},"padding":{"top":"var:preset|spacing|x-small","bottom":"30px","left":"0","right":"0"}},"border":{"radius":"4px","width":"0px","style":"none"}}} -->
    <main class="wp-block-group" style="border-style:none;border-width:0px;border-radius:4px;margin-top:32px;padding-top:var(--wp--preset--spacing--x-small);padding-right:0;padding-bottom:30px;padding-left:0"><!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false,"perPage":"8"},"enhancedPagination":true,"className":"cmb-query","layout":{"type":"default"}} -->
    <div class="wp-block-query cmb-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"0"},"typography":{"lineHeight":"1.5"}},"layout":{"type":"default","columnCount":"2","minimumColumnWidth":null}} -->
    <!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small"},"margin":{"top":"0px","bottom":"0px"},"blockGap":"0px"},"border":{"style":"none","width":"0px"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
    <header class="wp-block-group" style="border-style:none;border-width:0px;margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"padding":{"top":"5px","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"small"} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-date {"textAlign":"right","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","letterSpacing":"1px","fontSize":"12px"},"spacing":{"margin":{"top":"5px","bottom":"5px"}}},"textColor":"primary"} /--></div>
    <!-- /wp:group --></header>
    <!-- /wp:group -->
    <!-- /wp:post-template -->
    
    <!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"align":"wide","className":"is-style-pagination-button","style":{"typography":{"letterSpacing":"5px"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap","verticalAlignment":"center"}} -->
    <!-- wp:query-pagination-previous /-->
    
    <!-- wp:query-pagination-numbers {"midSize":1,"backgroundColor":"base"} /-->
    
    <!-- wp:query-pagination-next /-->
    <!-- /wp:query-pagination --></div>
    <!-- /wp:query --></main>
    <!-- /wp:group --></main>
    <!-- /wp:group -->
