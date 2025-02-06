<?php
function saas_theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() .'/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, '1.0', 'all' );

    
    wp_enqueue_style( 'owlcarousel-css', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.carousel.min.css', false, '1.0', 'all' );

    wp_enqueue_script('owlcarousel-js', get_template_directory_uri() .'/owlcarousel/dist/owl.carousel.min.js', array('jquery'), null, true);

    wp_enqueue_script('owlcarousel-js', get_template_directory_uri() .'/js/owl.min.js', array('jquery'), null, true);
    wp_enqueue_script('owlcarousel-js', get_template_directory_uri() .'/js/main.js');

    
    
}
add_action('wp_enqueue_scripts', 'saas_theme_enqueue_styles');



function saas_theme_setups() {

    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
     add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'editor-styles' );
    add_theme_support( 'html5', array( 'style','script' ) );
    add_theme_support( 'automatic-feed-links' ); 
    
    add_image_size( 'thaumb-img',140,200, array('center','center'));

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'saas' )
    ) );
    
   $headerimg = array(
        'default-img' => get_template_directory_uri().'/img/Dashboard.jpg',
        'default-text-color' => '000',
        'width' => 1920,
        'height' => 400,
           'flex-width' => true,
           'flex-height' => true,
   );
   add_theme_support('custom-header',$headerimg);


}
add_action('after_setup_theme','saas_theme_setups');


// function themename_custom_header_setup() {
// 	$args = array(
// 		'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
// 		'default-text-color' => '000',
// 		'width'              => 1000,
// 		'height'             => 250,
// 		'flex-width'         => true,
// 		'flex-height'        => true,
// 	);
// 	add_theme_support( 'custom-header', $args );
// }
// add_action( 'after_setup_theme', 'themename_custom_header_setup' );



function saas_widgets_init() {
    // Register Primary Sidebar
    register_sidebar(array(
        'name'          => __( 'Primary Sidebar', 'theme_name' ),
        'id'            => 'primary-sidebar',
        'description'   => 'Main sidebar on the right side',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    // Register Secondary Sidebar
    register_sidebar(array(
        'name'          => __( 'Secondary Sidebar', 'theme_name' ),
        'id'            => 'sidebar-2',
        'description'   => 'A short description of the sidebar.',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}

add_action('widgets_init', 'saas_widgets_init');



require get_template_directory() . '/Customizer.php';

require get_template_directory() . '/Coustom Post.php';

require get_template_directory() . '/projects.php';


include get_template_directory() . '/inc/sample/saas-config.php';
include get_template_directory() . '/inc/redux-core/framework.php';
include get_template_directory() . '/inc/sample/extension/my_extension/class-redux-extension-my-extension.php';

?>
