<?php
/**
 * Template part for displaying factory feed on main page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatricksix
 */

?>

<div class="factory-feed soapcolor-bg">
	<div class="grid">
		<h1 class="title-large text-center"><i class="fal fa-industry-alt fa-fw"></i>Factory Feed</h1>
		<div class="factory-feed__items">
			<?php
				$args = array( 'post_type'   => 'factory', 'post_status' => 'publish', 'posts_per_page' => '4' );
				$factory = new WP_Query( $args );
				if( $factory->have_posts() ) :
					while( $factory->have_posts() ) : $factory->the_post();
						if (has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a>
						<?php endif;
					endwhile;
				    wp_reset_postdata();
				endif;
			?>											
		</div>
		<p class="lead">The rest can be seen <a href="<?php echo esc_url( home_url( '/' ) ); ?>factory">in the Factory</a>.</p>					
	</div>
</div>	