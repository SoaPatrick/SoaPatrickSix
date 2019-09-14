<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package soapatricksix
 */

?>

<header class="page-header">
	<h1 class="title-large">
		<?php 
			if ( is_search() ) :
				esc_html_e( 'I found nothing!', 'soapatricksix' );
			else : 
				esc_html_e( 'Something went wrong!', 'soapatricksix' );
			endif;
		?>
	</h1>
</header>
<hr>
<div class="page-content">
	<?php 
		if ( is_search() ) :
			echo '<p>' . esc_html_e( 'Sorry, but I can&rsquo;t find what you&rsquo;re looking for. Please try again with other words.', 'soapatricksix' ) . '</p>';
			
		else :
			echo '<p>' . esc_html_e( 'It seems I can&rsquo;t find what you&rsquo;re looking for. Try finding it?', 'soapatricksix' ) . '</p>';		
		endif;
		get_search_form();
		the_widget( 'WP_Widget_Recent_Posts' ); 
	?>
</div>