<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package soapatricksix
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post' ); ?>>
	<?php $format = get_post_format(); ?>
	<?php if ($format === 'quote' || $format === 'link' || $format === 'status') : ?>		
		<header class="grid blog-post-header">
			<div class="inner-wrapper inner-wrapper__<?php echo $format ?>">
				<?php 
					if($format === 'status') : 						
			    		if (get_field( "font-awesome_icon" )) :
					    	echo '<i class="' . get_field( "font-awesome_icon" ) . '"></i>';
						else : 
							echo '<i class="fal fa-bullhorn"></i>';
						endif;
					endif;				        
					the_content(); 
		        ?>
			</div>
			<div class="blog-post-meta">
				<ul class="meta-wrapper fa-ul">
					<?php soapatricksix_posted_on(); ?>
					<?php the_tags('<li><span class="fa-li"><i class="fal fa-tags fa-fw"></i></span>',', ','</li>'); ?>
					<?php edit_post_link('Edit', '<li><span class="fa-li"><i class="fal fa-pencil fa-fw"></i></span>','</li>'); ?>			
				</ul>
			</div>	        	
		</header>
    <?php else : ?>
		<header class="grid blog-post-header"> 
			<?php the_title( '<h1 class="title-large">', '</h1>' ); ?>
		</header>					  
		<div class="grid blog-post-meta">
			<ul class="meta-wrapper fa-ul">
				<?php soapatricksix_posted_on(); ?>
				<?php the_tags('<li><span class="fa-li"><i class="fal fa-tags fa-fw"></i></span>',', ','</li>'); ?>
				<?php edit_post_link('Edit', '<li><span class="fa-li"><i class="fal fa-pencil fa-fw"></i></span>','</li>'); ?>			
			</ul>
		</div>
		<div class="grid blog-post-content">
			<?php the_content('<strong>Continue Reading...</strong>'); ?>
		</div>
	<?php endif; ?>		
</article>