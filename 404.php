<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package soapatricksix
 */

get_header(); ?>
    <div class="site-content">
	    <div class="grid container">
			<article>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
			</article>
		</div>
	</div>
<?php
get_footer();
