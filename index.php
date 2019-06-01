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
							?>
							<div class="site-content site-contant--factory-feed soapcolor-bg" style="margin-top: 2em;margin-bottom: 2em;">
								<div class="grid container">
									<h1 class="title-large text-center">Factory News</h1>
									<div class="factory-items">
									<?php
										$args = array( 'post_type'   => 'factory', 'post_status' => 'publish', 'posts_per_page' => '3' );
										$factory = new WP_Query( $args );
										if( $factory->have_posts() ) :
											while( $factory->have_posts() ) : $factory->the_post();
												if (has_post_thumbnail()) : ?>
													<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
												<?php endif;
											endwhile;
										    wp_reset_postdata();
										endif;
									?>											
									</div>						
								</div>
							</div>
							<?php							
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
