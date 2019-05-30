<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatricksix
 */

get_header(); ?>
    <div class="site-content">
	    <div class="container">
			<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'template-parts/content-single', get_post_type() );
				endwhile;
			?>			    	
		</div>
		<div class="grid">
			<?php 
				if ( is_single() ) :
					the_post_navigation();
				else : ?>
					<nav class="navigation posts-navigation">
						<div class="nav-links-custom">
							<?php posts_nav_link(' ','Newer Posts','Older Posts'); ?>
						</div>				
					</nav>
				<?php endif ;			
			?>			
		</div>
	</div>
<?php
get_footer();
