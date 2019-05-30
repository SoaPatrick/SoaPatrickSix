<?php
/**
Template Name: Archives Facrtory Items
 */

get_header(); ?>
    <div class="site-content">
	    <div class="grid container">
			<article>	    
				<nav class="breadcrumbs">
				    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></span>						
				    <span class="breadcrumbs--item__last">Factory</span>
				</nav>					
				<header class="page-header">
					<h1 class="title-large">Factory</h1>
				</header>
				<hr>
				<div class="tags-wrapper">
					<?php 	
					 	$args = array(
						    'orderby'    => 'name', 
						    'order'      => 'ASC',
						    'hide_empty' => TRUE, 
						    'fields'     => 'all', 
						); 
						$terms = get_terms( 'factory_tags', $args);			
					    foreach ( $terms as $term ) {
					        $url = get_term_link( $term );
					        if ( is_wp_error( $url ) ) {
					            continue;
					        }
					        printf(
					            '<a href="%s" class="btn btn-small">%s</a>',
					            $url,
					            $term->name
					        );				        				        
					    }
					?>
				</div>	
				<div class="page-content page-content--factory">
					<?php						
					if ( have_posts() ) : 
						while ( have_posts() ) : the_post();	
							get_template_part( 'template-parts/content', 'factory' );
						endwhile; 
					endif; ?>
				</div>
			</article>
			<nav class="navigation posts-navigation">
				<div class="nav-links-custom">
					<?php posts_nav_link(' ','Newer Factory Items','Older Factory Items'); ?>
				</div>				
			</nav>
		</div>
	</div>

<?php
get_footer();