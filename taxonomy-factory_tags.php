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
				    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>factory">Factory</a></span>
				    <span class="breadcrumbs--item__last"><?php echo single_term_title(); ?></span>
				</nav>					
				<header class="page-header">
					<h1 class="title-large"><?php echo single_term_title(); ?></h1>
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
					$currentTerm = $wp_query->get_queried_object();
				    foreach ( $terms as $term ) {
					    if ($currentTerm->term_id === $term->term_id)
					    	echo '<a href="'. get_term_link( $term ) .'" class="btn btn-small btn-active">'. $term->name .'</a>';
					    else {
						    echo '<a href="'. get_term_link( $term ) .'" class="btn btn-small">'. $term->name .'</a>';
					    }     				        
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
			<?php the_posts_pagination( ); ?> 
		</div>
	</div>

<?php
get_footer();


