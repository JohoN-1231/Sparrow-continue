<?
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
add_filter( 'use_widgets_block_editor', '__return_false' );

add_action( "wp_enqueue_scripts", "themeStyle" );
add_action( "wp_enqueue_scripts", "themeScripts" );
add_action( "after_setup_theme", "themeCustom" );

function themeStyle(){
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'default', get_template_directory_uri() . '/css/default.css' );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css' );
    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css' );
}
function themeScripts(){
    wp_deregister_script("jquery");
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-1.10.2.min.js', [], false, true); 
    wp_enqueue_script('migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', [], false, true); 
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', [], false, true); 
    wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/js/doubletaptogo.js', [], false, true);
    wp_enqueue_script('init', get_template_directory_uri() . '/js/init.js', [], false, true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.js', [], false, false);
}

function themeCustom(){
    add_theme_support("custom-logo");
    register_nav_menu("top-menu", 'Tepa menyu');
    register_nav_menu("bottom-menu", 'Past menyu');
}

add_action ( 'widgets_init', 'register_widgets') ; 
function register_widgets() { 

	register_sidebar (  array( 
		'name'           =>  "Asosiy sahifa matn widgetlari" , 
		'id'             =>  "text-widget" , 
		'description'    =>  'Widget panel tarifi' ,
		'before_widget'  =>  '<div class="columns">' , 
		'after_widget'   =>  "</div>\n" , 
		'before_title'   =>  '<h2>' , 
		'after_title'    =>  "</h2>\n" , 
	)); 
    register_sidebar (  array( 
		'name'           =>  "Widget ijtimoiy ikonkalari" , 
		'id'             =>  "social-icons" , 
		'description'    =>  'Widget ikonka tarifi' ,
		'before_widget'  =>  false, 
		'after_widget'   =>  false, 
		'before_title'   =>  false, 
		'after_title'    =>  false, 
	)); 
    register_sidebar( array(
		'name'          => "Asosiy sidebar",
		'id'            => "main-sidebar",
		'before_widget' => '<div class="widget">',
		'after_widget'  => "</div>\n",
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => "</h5>\n",
	) );
}

