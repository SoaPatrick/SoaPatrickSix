<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package soapatricksix
 */

?>
		<?php if ( is_home() && !is_paged() ) : ?>
			<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
			<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>							
		    <div class="site-content site-contant--instagram-feed soapcolor-bg">
			    <div class="container">
				    <h2 class="title-large text-center"><i class="fab fa-instagram fa-fw"></i>Instagram Feed</h2>
					<p class="lead">If you have the time and feel like it, why don't you <a href="https://www.instagram.com/SoaPatrick/" target="_blank" rel="noopener">follow me</a> on Instagram?</p>
					<?php simple_instagram(10); ?>
			    </div>
		    </div>
			<script>var flkty=new Flickity(".main-carousel",{setGallerySize:!0,pageDots:!1,resize:!0,groupCells:1});</script>
		<?php endif; ?>			    	        	    
	    <footer class="site-footer<?php if ( !is_home() || is_paged()) : ?> soapcolor-bg<?php endif; ?>">
		    <div class="container">
				<p>Stuff from 2000 to <?php echo date('Y'); ?> by SoaPatrick<a href="<?php echo esc_url( home_url( '/' ) ); ?>log">Six</a></p>			    
		    </div>	    	    
	    </footer>
	</div>

<?php wp_footer(); ?>

</body>
</html>
