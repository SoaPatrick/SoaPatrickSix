<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SoaPatrick_Four
 */

get_header(); ?>
    <div class="site-content">
	    <div class="grid container">
			<?php				        
			if ( have_posts() ) : ?>
				<nav class="breadcrumbs">
				    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">SoaPatrick</a></span>						
				    <span class="breadcrumbs--item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>/storage/">Storage</a></span>
				    <span class="breadcrumbs--item__last"><?php the_archive_title();?></span>
				</nav>			
				<header class="page-header">
					<h1 class="title-large"><?php the_archive_title();?></h1>
				</header>
				<hr>
				<?php 
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'list' );
					endwhile;
				?>
				<nav class="navigation posts-navigation">
					<div class="nav-links">
						<div class="nav-next"><?php previous_posts_link( 'Newer Posts' ); ?></div>
						<div class="nav-previous"><?php next_posts_link( 'Older Posts', '' ); ?></div>
					</div>				
				</nav>				
			<?php endif; ?>			
		</div>
	</div>
<?php
get_footer();