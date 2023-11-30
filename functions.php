<?php
/*
	==========================================
	 Include scripts
	==========================================
*/
function presento_script_enqueue(){

     //css
    wp_enqueue_style('presento-style', get_template_directory_uri().'/assets/css/presento.css',array(),'1.0.0','all');
    wp_enqueue_style('presento-bootstrap_css', get_template_directory_uri().'/assets/vendor/bootstrap/css/bootstrap.min.css',array(),'5.3.2','all');

    
 // wp_enqueue_style('presento-aos_css', get_template_directory_uri().'/assets/vendor/aos/aos.css',array(),'1.0.0','all');
   wp_enqueue_style('presento-boxicons_css', get_template_directory_uri().'/assets/vendor/boxicons/css/boxicons.min.css',array(),'1.0.0','all');
    wp_enqueue_style('presento-glightbox_css', get_template_directory_uri().'/assets/vendor/glightbox/css/glightbox.min.css',array(),'1.0.0','all');
   wp_enqueue_style('presento-remixicon_css', get_template_directory_uri().'/assets/vendor/remixicon/remixicon.css',array(),'1.0.0','all');
   wp_enqueue_style('presento-swiper_css', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.css',array(),'1.0.0','all'); 


    //fonts
    wp_enqueue_style('custom-google-fonts','//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');

    //js
    wp_enqueue_script('presento_script', get_template_directory_uri().'/assets/js/presento.js',array(),'1.0.0', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '', true);
    wp_enqueue_script('presento_purecounter_js', get_template_directory_uri().'/assets/vendor/purecounter/purecounter_vanilla.js',array(),'1.0.0', true);
    wp_enqueue_script('presento_aos_js', get_template_directory_uri().'/assets/vendor/aos/aos.js',array(),'1.0.0', true);
    wp_enqueue_script('presento_glightbox_js', get_template_directory_uri().'/assets/vendor/glightbox/js/glightbox.min.js',array(),'1.0.0', true);
    wp_enqueue_script('presento_isotope_js', get_template_directory_uri().'/assets/vendor/isotope-layout/isotope.pkgd.min.js',array(),'1.0.0', true);
  //  wp_enqueue_script('presento_swiper_js', get_template_directory_uri().'/assets/vendor/swiper/swiper-bundle.min.js',array(),'1.0.0', true);
    wp_enqueue_script('presento_validate_js', get_template_directory_uri().'/assets/vendor/php-email-form/validate.js',array(),'1.0.0', true);


}
add_action('wp_enqueue_scripts','presento_script_enqueue');


/*
	==========================================
	 Activate menus
	==========================================
*/
function presento_theme_setup(){
    add_theme_support('menus');

    register_nav_menu('primary','Primary Header Navigation');
    register_nav_menu('secondary','Footer Navigation');
}
add_action('init','presento_theme_setup');


/*
	==========================================
	 Setup custom logo for theme
	==========================================
*/
function presento_theme_logo_setup(){
    $defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'presento_theme_logo_setup' );


/*
	==========================================
	 Theme Support Functions
	==========================================
*/

function presento_after_setup_theme() {
    add_theme_support( 'custom-header' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'presento_after_setup_theme' );

//add_theme_support('widgets');


/*
	==========================================
	 Sidebar Function
	==========================================
*/
function presento_widget_setup(){
    
    register_sidebar(
        array(
            'name' => 'sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'standard sidebar',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
            'before_title' => '<h1 class="widget-title">',
            'after_title' => '</h1>',
        )
        );
}
add_action('widgets_init','presento_widget_setup');



/*
	==========================================
	 ----------------------------
	==========================================
*/

