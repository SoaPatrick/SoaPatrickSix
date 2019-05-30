<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatricksix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post condensed' ); ?>>
	<div class="list-wrapper">
		<div class="list-icon">
			<?php 
				$format = get_post_format();
				if ($format === 'quote') :
					echo '<i class="fal fa-quote-right"></i>';
				elseif ($format === 'link') :
					echo '<i class="fal fa-link"></i>';
				else :
					if (has_post_thumbnail()) :	
						the_post_thumbnail( 'list-featured-image' );					
					else :		    
				    	if (get_field( "font-awesome_icon" )) :
						    echo '<i class="' . get_field( "font-awesome_icon" ) . '"></i>';
						 else :
							echo '<i class="fal fa-pencil"></i>';	
						endif;
					endif;
				endif;
			?>				
		</div>
		<div>
			<header class="blog-post-header">
				<?php the_title( '<h1 class="list-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' ); ?>
			</header>
			<div class="blog-post-meta">
				<ul class="meta-wrapper fa-ul">
					<?php soapatricksix_posted_on(); ?>
					<?php the_tags('<li class="meta-wrapper--tags"><span class="fa-li"><i class="fal fa-tags fa-fw"></i></span>',', ','</li>'); ?>
					<?php edit_post_link('Edit', '<li><span class="fa-li"><i class="fal fa-pencil fa-fw"></i></span>','</li>'); ?>			
				</ul>
			</div>			
		</div>
	</div>
</article>