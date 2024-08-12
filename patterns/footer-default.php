<?php
/**
 * Title: Footer default
 * Slug: compendium/footer-default
 * Categories: compendium-patterns
 * Keywords: footer
 */
?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"64px","bottom":"64px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:32px;margin-bottom:32px">
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"grid","columnCount":"2","minimumColumnWidth":null}} -->
    <div class="wp-block-group">
        <!-- wp:paragraph {"align":"left","metadata":{"name":"Footer credits"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"x-small"} -->
        <p class="has-text-align-left has-secondary-color has-text-color has-link-color has-x-small-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>  •
        <?php echo esc_html__('Powered by WordPress', 'compendium'); ?> &amp; <a href="https://mildthemes.co/compendium-wordpress-theme/" target="_blank"
                rel="noreferrer noopener"><?php echo esc_html__('Compendium', 'compendium'); ?></a></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"align":"right","metadata":{"name":"Links"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}},"typography":{"fontSize":"14px","letterSpacing":"0px"}},"textColor":"secondary"} -->
        <p class="has-text-align-right has-secondary-color has-text-color has-link-color"
            style="font-size:14px;letter-spacing:0px"><a href="#" data-type="page"
                data-id="1865"><?php echo esc_html__('Twitter', 'compendium'); ?></a> • <a href="#" data-type="page"
                data-id="1865"><?php echo esc_html__('Instagram', 'compendium'); ?></a> • <a href="#" data-type="page"
                data-id="1865"><?php echo esc_html__('Facebook', 'compendium'); ?></a> • <a href="#"
                data-type="page" data-id="1865"><?php echo esc_html__('Github', 'compendium'); ?></a> • <a href="#"
                data-type="page" data-id="1865"><?php echo esc_html__('Email', 'compendium'); ?></a></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->