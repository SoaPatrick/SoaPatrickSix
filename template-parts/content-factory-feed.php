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
		<h1 class="title-large text-center">
			<svg class="svg-inline--fa fa-industry-alt fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="industry-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
				<path fill="currentColor" d="M404 384h-40c-6.627 0-12-5.373-12-12v-40c0-6.627 5.373-12 12-12h40c6.627 0 12 5.373 12 12v40c0 6.627-5.373 12-12 12zm-116-12v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm-128 0v-40c0-6.627-5.373-12-12-12h-40c-6.627 0-12 5.373-12 12v40c0 6.627 5.373 12 12 12h40c6.627 0 12-5.373 12-12zm352-188v272c0 13.255-10.745 24-24 24H24c-13.255 0-24-10.745-24-24V56c0-13.255 10.745-24 24-24h80c13.255 0 24 10.745 24 24v185.167l157.267-78.633C301.052 154.641 320 165.993 320 184v57.167l157.267-78.633C493.052 154.641 512 165.993 512 184zM96 280V64H32v384h448V196.944l-180.422 90.211C294.268 289.81 288 285.949 288 280v-83.056l-180.422 90.211C102.269 289.811 96 285.947 96 280z"></path>
			</svg>
			Factory Feed</h1>
		<div class="factory-feed__items">
			<?php
				$args = array( 'post_type'   => 'factory', 'post_status' => 'publish', 'posts_per_page' => '4' );
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
		<p class="lead">The rest of the Factory can be seen <a href="<?php echo esc_url( home_url( '/' ) ); ?>factory">here</a>.</p>					
	</div>
</div>	