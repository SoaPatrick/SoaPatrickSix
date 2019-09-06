<?php
/**
 * Template part for displaying single posts
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
					<?php the_tags('<li class="meta-wrapper--tags"><span class="fa-li"><svg class="svg-inline--fa fa-tags fa-w-20 fa-fw" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M625.941 293.823L421.823 497.941c-18.746 18.746-49.138 18.745-67.882 0l-1.775-1.775 22.627-22.627 1.775 1.775c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L391.431 36.686A15.895 15.895 0 0 0 380.117 32h-19.549l-32-32h51.549a48 48 0 0 1 33.941 14.059L625.94 225.941c18.746 18.745 18.746 49.137.001 67.882zM252.118 32H48c-8.822 0-16 7.178-16 16v204.118c0 4.274 1.664 8.292 4.686 11.314l211.882 211.882c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L263.431 36.686A15.895 15.895 0 0 0 252.118 32m0-32a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.746 18.746-49.138 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118V48C0 21.49 21.49 0 48 0h204.118zM144 124c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20m0-28c26.51 0 48 21.49 48 48s-21.49 48-48 48-48-21.49-48-48 21.49-48 48-48z"></path></svg></span>',', ','</li>'); ?>
					<?php edit_post_link('Edit', '<li><span class="fa-li"><svg class="svg-inline--fa fa-pencil fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517-.001-90.51zm-95.196 140.45L174 420.745V386h-48v-48H91.255l224.059-224.059 82.745 82.745zM126.147 468.598l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z"></path></svg></span>','</li>'); ?>			
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
				<?php the_tags('<li class="meta-wrapper--tags"><span class="fa-li"><svg class="svg-inline--fa fa-tags fa-w-20 fa-fw" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M625.941 293.823L421.823 497.941c-18.746 18.746-49.138 18.745-67.882 0l-1.775-1.775 22.627-22.627 1.775 1.775c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L391.431 36.686A15.895 15.895 0 0 0 380.117 32h-19.549l-32-32h51.549a48 48 0 0 1 33.941 14.059L625.94 225.941c18.746 18.745 18.746 49.137.001 67.882zM252.118 32H48c-8.822 0-16 7.178-16 16v204.118c0 4.274 1.664 8.292 4.686 11.314l211.882 211.882c6.253 6.253 16.384 6.243 22.627 0l204.118-204.118c6.238-6.239 6.238-16.389 0-22.627L263.431 36.686A15.895 15.895 0 0 0 252.118 32m0-32a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.746 18.746-49.138 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118V48C0 21.49 21.49 0 48 0h204.118zM144 124c-11.028 0-20 8.972-20 20s8.972 20 20 20 20-8.972 20-20-8.972-20-20-20m0-28c26.51 0 48 21.49 48 48s-21.49 48-48 48-48-21.49-48-48 21.49-48 48-48z"></path></svg></span>',', ','</li>'); ?>
				<?php edit_post_link('Edit', '<li><span class="fa-li"><svg class="svg-inline--fa fa-pencil fa-w-16 fa-fw" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="pencil" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.255 56.236l-37.49-37.49c-24.993-24.993-65.515-24.994-90.51 0L12.838 371.162.151 485.346c-1.698 15.286 11.22 28.203 26.504 26.504l114.184-12.687 352.417-352.417c24.992-24.994 24.992-65.517-.001-90.51zm-95.196 140.45L174 420.745V386h-48v-48H91.255l224.059-224.059 82.745 82.745zM126.147 468.598l-58.995 6.555-30.305-30.305 6.555-58.995L63.255 366H98v48h48v34.745l-19.853 19.853zm344.48-344.48l-49.941 49.941-82.745-82.745 49.941-49.941c12.505-12.505 32.748-12.507 45.255 0l37.49 37.49c12.506 12.506 12.507 32.747 0 45.255z"></path></svg></span>','</li>'); ?>			
			</ul>
		</div>
		<div class="grid blog-post-content">
			<?php the_content('<strong>Continue Reading...</strong>'); ?>
		</div>
	<?php endif; ?>		
</article>