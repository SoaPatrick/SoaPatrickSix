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
	<header class="grid blog-post-header">
		<?php if (has_post_format('quote')) :
	    	the_title( '<h1 class="title-medium blog-post-quote">', '</h1>' ); ?>
			<p class="quote-author">
				<?php echo get_post_meta($post->ID, '_format_quote_source_name', true); ?>
			</p>						
		<?php elseif (has_post_format('link')) :
			the_title( '<h1 class="title-medium blog-post-link">', '</h1>' );
			$link_url = get_post_meta($post->ID, '_format_link_url', true);
			echo '<p class="link"><a href="'.$link_url.'" class="link" target="_blank">' .$link_url. '</a></p>';
		elseif (has_post_format('status')): ?>
	        <div class="blog-post-status">
		    	<?php if (get_field( "font-awesome_icon" )) : ?>
				    <i class="<?php echo get_field( "font-awesome_icon" ) ?>"></i>
				<?php else : ?>
					<i class="fal fa-bullhorn"></i>		
				<?php endif; ?>					        
		        <?php the_content(); ?>
		    </div>
	    <?php else :
			the_title( '<h1 class="title-large">', '</h1>' );
		endif; ?>				
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
</article>