<?php
/**
 * Title: 404
 * Slug: custom/404
 * Inserter: no
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"5px"}}},"layout":{"type":"constrained","wideSize":"400px"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:heading {"textAlign":"center","level":1,"align":"wide"} -->
	<h1 class="alignwide has-text-align-center"><?php echo esc_html_x('404: Page not found', '404 error', 'custom'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html_x('Maybe try a search?', 'encourage user to search'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_x('Search', 'label', 'custom'); ?>","placeholder":"<?php echo esc_attr_x('Search...', 'placeholder for search field', 'custom'); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e('Search', 'custom'); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--70)"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->