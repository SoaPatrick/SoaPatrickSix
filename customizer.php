<?php
add_action( 'customize_register', 'cd_color_picker_settings' );
function cd_color_picker_settings( $wp_customize ) {
	$wp_customize->add_section( 'cd_color_picker' , array(
	    'title'      => 'Color Picker',
	    'priority'   => 20,
	) );
	
	$wp_customize->add_setting( 'soap_color_2' , array(
	    'default'     => '#CF3A3A',
	    'transport'   => 'refresh',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'soap_color_1', array(
		'label'      => 'Soap Color',
		'description'=> 'Some predefined colors:<br>
			Red: #<strong>CF3A3A</strong><br>
			Blue: #<strong>28aae2</strong><br>
			Pink: #<strong>EC407A</strong><br>
			Purple: #<strong>AB47BC</strong><br>
			Green: #<strong>348236</strong>',
		'section'    => 'cd_color_picker',
		'settings'   => 'soap_color_2',
	) ) );		
}

add_action( 'wp_head', 'cd_color_picker');
function cd_color_picker()
{
    ?>
		<style type="text/css">
		:root {
			--soap-color: <?php echo get_theme_mod('soap_color_2', '#CF3A3A'); ?>; 
		}
		</style>
    <?php
}