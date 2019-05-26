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
	<div class="grid">
		<nav class="breadcrumbs">
		    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></span>						
		    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>factory">Factory</a></span>
		    <span class="breadcrumbs--item__last"><?php the_title() ?></span>
		</nav>		
	</div>		
	<header class="grid blog-post-header"> 
		<?php the_title( '<h1 class="title-large">', '</h1>' ); ?>
	</header>					  
	<div class="grid blog-post-meta">
		<ul class="meta-wrapper fa-ul">
			<?php soapatricksix_posted_on(); ?>
<!--			
			<li><span class="fa-li"><i class="fal fa-tags fa-fw"></i></span>
			<?php $terms = get_the_terms( $post->ID , 'portfolio_category' );
				foreach ( $terms as $term ) {
					echo $term->name;
					echo ', ';
				}
			?>
-->
			</li>
			<?php the_tags('<li><span class="fa-li"><i class="fal fa-tags fa-fw"></i></span>',', ','</li>'); ?>
			<?php edit_post_link('Edit', '<li><span class="fa-li"><i class="fal fa-pencil fa-fw"></i></span>','</li>'); ?>			
		</ul>
	</div>
	<div class="grid blog-post-content">
		<?php the_content('<strong>Continue Reading...</strong>'); ?>
	</div>
</article>