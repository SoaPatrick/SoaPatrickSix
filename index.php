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
				if ( have_posts() ) : 
					$postCount = 0;				
					while ( have_posts() ) : the_post();
						$postCount++;
						if ( $postCount == 2  && is_home() && !is_paged() ) : 
							get_template_part( 'template-parts/content-factory-feed' );
						endif; 
						get_template_part( 'template-parts/content-single', get_post_type() );
					endwhile;
				endif; 
			?>			    	
		</div>
		<div class="grid">
			<?php 
				if ( is_single() ) :
					the_post_navigation();
				else : ?>
					<nav class="navigation posts-navigation">
						<div class="nav-links">
							<div class="nav-next"><?php previous_posts_link( 'Newer Posts' ); ?></div>
							<div class="nav-previous"><?php next_posts_link( 'Older Posts', '' ); ?></div>
						</div>				
					</nav>	
				<?php endif ;			
			?>			
		</div>
	</div>
<?php
get_footer();
