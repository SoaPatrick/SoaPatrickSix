<?php
/**
 * Template part for displaying factory list items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatricksix
 */

?>

<article id="post-<?php the_ID(); ?>">
	<?php if( has_post_thumbnail() ) :
		echo '<a href="' . esc_url( get_permalink() ) . '">';
		the_post_thumbnail( 'full-width' );				
		echo '</a>';
	endif; ?>				
</article>