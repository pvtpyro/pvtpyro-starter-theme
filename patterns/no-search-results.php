<?php
/**
 * Title: Hidden No Results Content
 * Slug: custom/no-search-results
 * Inserter: no
 */
?>
<!-- wp:paragraph {"fontSize":"medium"} -->
<p class="has-medium-font-size">
<?php echo esc_html_x( 'Nothing found. Please try your search again.', 'message to display when there are no search results', 'custom' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'custom' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'custom' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'custom' ); ?>","buttonUseIcon":true} /-->
