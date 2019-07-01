<?php 


// menu 
function myCarnewaMenu(){
	
	if (function_exists("register_nav_menu")) {
		# code...
		register_nav_menu( "header_top_menu", __('Header Menu', 'carnews' ));
		register_nav_menu( "footer_top_menu", __('Footer Menu', 'carnews' ));
	}
}

add_action( 'init', 'myCarnewaMenu' );


// featucher image support
add_theme_support( 'post-thumbnails', array('post','page' ));
set_post_thumbnail_size( 300, 300, true );
add_image_size( 'myFeatucherImage', 300,300, true );

// widgets support 
function myWidget(){
	register_sidebar( array( 
		'name' 			=> esc_html( __('Home Page Sidebar', 'carnews')),
		'id'			=> 'widget-home-top',
		'before_widget'	=> '<div class="siderbar-widget">',
		'after_widget'	=> '</div>',
		'befor_title'	=> '<h4 class="sidebar-widget-title">',
		'after_title'	=> '</h4>',
	 ) );

	
	register_sidebar( array( 
		'name' 			=> esc_html( __('Footer Widget', 'carnews')),
		'id'			=> 'footer-widget',
		'before_widget'	=> '<div class="col-md-3 col-sm-6 col-xs-12"><div class="footer-widget">',
		'after_widget'	=> '</div></div>',
		'befor_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	 ) );

	register_sidebar( array( 
		'name' 			=> esc_html( __('Footer Top Content', 'carnews')),
		'id'			=> 'footer-content-widget',
		'before_widget'	=> '<div class="emergency-call mrb-50">',
		'after_widget'	=> '</div>',
		'befor_title'	=> '<h2 class="widget-title">',
		'after_title'	=> '</h2>',
	 ) );
}
add_action( 'widgets_init', 'myWidget' );



