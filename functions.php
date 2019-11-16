<?php
/**
 * soapatricksix functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package soapatricksix
 */

if ( ! function_exists( 'soapatricksix_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function soapatricksix_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on soapatricksix, use a find and replace
		 * to change 'soapatricksix' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'soapatricksix', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu' => esc_html__( 'Primary', 'soapatricksix' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(
			'image',
			'video',
			'quote',
			'link',
			'status'
		) );
		
		
		add_theme_support( 'align-wide' );
		add_theme_support( 'disable-custom-colors' );
		
		add_theme_support( 'editor-color-palette', array(
			array(
				'name'  => __( 'Soap', 'soapatricksix' ),
				'slug'  => 'soap',
				'color'	=> '#000000',
			),			
			array(
				'name'  => __( 'Red', 'soapatricksix' ),
				'slug'  => 'red',
				'color'	=> '#CF3A3A',
			),
			array(
				'name'  => __( 'Blue', 'soapatricksix' ),
				'slug'  => 'blue',
				'color' => '#28aae2',
			),
			array(
				'name'  => __( 'Pink', 'soapatricksix' ),
				'slug'  => 'pink',
				'color' => '#EC407A',
			),	
			array(
				'name'  => __( 'Purple', 'soapatricksix' ),
				'slug'  => 'purple',
				'color' => '#AB47BC',
			),					
			array(
				'name'  => __( 'Green', 'soapatricksix' ),
				'slug'  => 'green',
				'color' => '#348236',
			),
			array(
				'name'	=> __( 'Amber', 'soapatricksix' ),
				'slug'	=> 'amber',
				'color'	=> '#FFB300',
			),		
		) );		
	}
endif;
add_action( 'after_setup_theme', 'soapatricksix_setup' );

/**
 * Remove Gutenberg Stylesheet
 *
 */
/*
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library' );
}
*/

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function soapatricksix_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'soapatricksix_content_width', 640 );
}
add_action( 'after_setup_theme', 'soapatricksix_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function soapatricksix_scripts() {
	wp_enqueue_style( 'soapatricksix-style', get_stylesheet_uri() );
	wp_enqueue_script( 'soapatricksix-scripts', get_template_directory_uri() . '/js/scripts.js', '','' , true );	
	//wp_enqueue_script( 'soapatricksix-fa5', get_template_directory_uri() . '/js/fontawesome-all.min.js','','5.11.2', true  );
	if ( !is_admin() ) wp_deregister_script('jquery');		
}
add_action( 'wp_enqueue_scripts', 'soapatricksix_scripts' );


/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package soapatricksix
 */

if ( ! function_exists( 'soapatricksix_posted_on' ) ) :
	/**
	 * Prints HTML with meta information for the current post-date/time and author.
	 */
	function soapatricksix_posted_on() {
		$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';

		$time_string = sprintf( $time_string,
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		$posted_on = sprintf(
			esc_html_x( '%s', 'post date', 'soapatricksix' ),
			'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
		);
		
		echo '<li><span class="fa-li"><i class="fal fa-calendar fa-fw"></i></span>' . $posted_on . '</li>';

	}
endif;


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function soapatricksix_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'soapatricksix_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function soapatricksix_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'soapatricksix_pingback_header' );


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom Image Sizes
 * 
 * https://codex.wordpress.org/Function_Reference/add_image_size
 */
if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'large-featured-image', 1250 );    
	add_image_size( 'list-featured-image', 100, 100, array( 'center', 'center' ) );    	
}

/**
 * Remove Emojiscript
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


/**
 * Shortens title used in next and previous post links.
 *
 * Replaces the '%title' argument used in the 2nd argument of these WordPress functions:
 * previous_post_link() and next_post_link()
 *
 * Sample usage with and without optional argument:
 *      previous_post_link( %link, shorten_next_prev_title( 'prev', 25 ) );
 *      next_post_link( %link, shorten_next_prev_title( 'next' ) );
 *
 * @since 1.0.0 (Aug 9, 2015 build date)
 *
 * @see get_next_post() and get_previous_post()
 * @link http://codesport.io/coding/previous-and-next-post-titles/
 *
 * @param string $direction Use 'next' or 'prev'. If != 'next' hard defaults to 'prev'
 * @param integer $my_title_length Optional. Number of characters in title. Defaults to 33
 * @return string A shortened title.
 */
 
function shorten_next_prev_title( $direction, $my_title_length = 33 ) {
    if ( $direction == 'next' ) {
        $my_post = get_next_post();  
    } else {
        $my_post = get_previous_post(); 
    }
 
    if ( !empty( $my_post ) ) {
         $my_post_title = $my_post->post_title;
         if ( strlen( $my_post_title ) > $my_title_length ) {
              $shortened_my_post_title = substr( $my_post_title, 0, $my_title_length ) . '…';   
         } else {
             $shortened_my_post_title = $my_post_title;       
         }
    }
         
    return $shortened_my_post_title;
}

/**
 * Attach a class to linked images' parent anchors
 * Works for existing content
 */
function give_linked_images_class($content) {

  $classes = 'img-link'; // separate classes by spaces - 'img image-link'

  // check if there are already a class property assigned to the anchor
  if ( preg_match('/<a.*? class=".*?"><img/', $content) ) {
    // If there is, simply add the class
    $content = preg_replace('/(<a.*? class=".*?)(".*?><img)/', '$1 ' . $classes . '$2', $content);
  } else {
    // If there is not an existing class, create a class property
    $content = preg_replace('/(<a.*?)><img/', '$1 class="' . $classes . '" ><img', $content);
  }
  return $content;
}

add_filter('the_content','give_linked_images_class');

/**
 * Register Custom Post Types
 */

function register_custom_post_types() {

	/* Post Type: Factory. */
	$factory_labels = array(
		"name" => "Factory",
		"singular_name" => "Factory Item",
		"menu_name" => "Factory",
	);

	$args = array(
		"label" => "Portfolios",
		"labels" => $factory_labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"menu_icon" => "dashicons-art",
		"menu_position" => 5,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "factory", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail", "post-formats" ),
		"taxonomy" => "factory_tags",
	);

	register_post_type( "factory", $args );
	
	
	/* Post Type: Changelog. */
	$changelog_labels = array(
		"name" => "Logs",
		"singular_name" => "Log",
		"menu_name" => "Logs",
	);

	$args = array(
		"label" => "Logs",
		"labels" => $changelog_labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"menu_icon" => "dashicons-hammer",
		"menu_position" => 6,		
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "log", "with_front" => false ),
		"query_var" => true,
		"supports" => array( "title"),
	);

	register_post_type( "log", $args );	
}

add_action( 'init', 'register_custom_post_types' );

/**
 * Register Custom Taxonomies
 */

function register_my_taxes() {
	
	$factory_tag_labels = array(
		"name" => "Factory Tags",
		"singular_name" => "Factory Tags",
	);
	

	/* Taxonomy: Factory Tags.*/
	$factory_tag_args = array(
		"label" => "Factory Tags",
		"labels" => $factory_tag_labels,
		"public" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => array( 'slug' => 'factory-tag', 'with_front' => false, ),
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"show_in_quick_edit" => true,
	);
	register_taxonomy( "factory_tags", array( "factory" ), $factory_tag_args );	
}

add_action( 'init', 'register_my_taxes' );


/**
 * Advanced Custom Fields
 */

define( 'ACF_LITE', true );
include_once('advanced-custom-fields/acf.php');

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_font-awesome-icon',
		'title' => 'Font-Awesome Icon',
		'fields' => array (
			array (
				'key' => 'field_56ed1244cce42',
				'label' => 'Font-Awesome Icon',
				'name' => 'font-awesome_icon',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'side',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	
	register_field_group(array (
		'id' => 'acf_change-log',
		'title' => 'Change Log',
		'fields' => array (
			array (
				'key' => 'field_5ad8c6dfbfa48',
				'label' => 'Changelog Type',
				'name' => 'changelog_type',
				'type' => 'select',
				'required' => 1,
				'choices' => array (
					'fal fa-plus-circle' => 'Added',
					'fal fa-minus-circle' => 'Removed',
					'fal fa-wrench' => 'Changed',
					'fal fa-bug' => 'Fixed',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'log',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));	
}	
	
/**
 * Remove archive title prefixes.
 *
 * @param  string  $title  The archive title from get_the_archive_title();
 * @return string          The cleaned title.
 */
 
function grd_custom_archive_title( $title ) {
	// Remove any HTML, words, digits, and spaces before the title.
	return preg_replace( '#^[\w\d\s]+:\s*#', '', strip_tags( $title ) );
}
add_filter( 'get_the_archive_title', 'grd_custom_archive_title' );


/**
 * Remove the Tag Cloud's Font Sizes.
 *
 */

add_filter('wp_generate_tag_cloud', 'myprefix_tag_cloud',10,1);

function myprefix_tag_cloud($tag_string){
  return preg_replace('/style=("|\')(.*?)("|\')/','',$tag_string);
}

/**
 * wrap all iframes within content with a div and class
 *
 */
 
function div_wrapper($content) {
    // match any iframes
    $pattern = '~<iframe.*</iframe>|<embed.*</embed>~';
    preg_match_all($pattern, $content, $matches);

    foreach ($matches[0] as $match) {
        // wrap matched iframe with div
        $wrappedframe = '<div class="responsive-container">' . $match . '</div>';

        //replace original iframe with new in content
        $content = str_replace($match, $wrappedframe, $content);
    }

    return $content;    
}
add_filter('the_content', 'div_wrapper');


include('customizer.php');


/**
 * Remove Jetpack CSS
 *
 */
add_filter( 'jetpack_sharing_counts', '__return_false', 99 );
add_filter( 'jetpack_implode_frontend_css', '__return_false', 99 );



/**
 * Replace Youtube Videos with Preview Image instead
 * of embeded iFrame, play video on click
 *
 */
function youtube_embeded($content){

	//youtube.com\^(?!href=)
	if (preg_match_all('#(?<!href\=\")https\:\/\/www.youtube.com\/watch\?([\\\&\;\=\w\d]+|)v\=[\w\d]{11}+([\\\&\;\=\w\d]+|)(?!\"\>)#', $content, $youtube_match)) {
		foreach ($youtube_match[0] as $youtube_url) {
			parse_str( parse_url( wp_specialchars_decode( $youtube_url ), PHP_URL_QUERY ), $youtube_video );
			if (isset($youtube_video['v'])){
				$content = str_replace($youtube_url, '<div class="youtube-wrapper"><div class="youtube-wrapper__video" data-id="'.$youtube_video['v'].'"></div></div>', $content);
			}
		}
	}
	
	//youtu.be
	if (preg_match_all('#(?<!href\=\")https\:\/\/youtu.be/([\\\&\;\=\w\d]+|)(?!\"\>)#', $content, $youtube_match)){
		foreach ($youtube_match[0] as $youtube_url) {
			$youtube_video = str_replace('https://youtu.be/', '', $youtube_url);
			if (isset($youtube_video)){
				$content = str_replace($youtube_url, '<div class="youtube-wrapper"><div class="youtube-wrapper__video" data-id="'.$youtube_video.'"></div></div>', $content);
			}
		}
	}

	return $content;

}
add_filter('the_content', 'youtube_embeded',1);	