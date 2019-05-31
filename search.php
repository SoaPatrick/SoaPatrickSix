<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package soapatricksix
 */

get_header(); ?>
    <div class="site-content blog-post-list">
	    <div class="grid container">
			<?php if ( have_posts() ) : ?>					
				<header class="page-header">
					<h1 class="title-large">Search: <?php echo get_search_query(); ?></h1>
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
			<?php else :
				get_template_part( 'template-parts/content', 'none' );
			endif; ?> 
		</div>
	</div>
<?php
get_footer();