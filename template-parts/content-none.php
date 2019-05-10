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
				esc_html_e( 'Nothing Found', 'soapatricksix' );
			else : 
				esc_html_e( 'Not the Page you were looking for!', 'soapatricksix' );
			endif;
		?>
	</h1>
</header>
<hr>
<div class="page-content">
	<?php 
		if ( is_search() ) :
			echo '<p>' . esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'soapatricksix' ) . '</p>';
			
		else :
			echo '<p>' . esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'soapatricksix' ) . '</p>';		
		endif;
		get_search_form();
		the_widget( 'WP_Widget_Recent_Posts' ); 
	?>
</div>