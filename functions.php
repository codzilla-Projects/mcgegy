<?php  

define('mcg_ROOT', get_stylesheet_directory().'/');

define('mcg_URL', get_stylesheet_directory_uri() .'/');

define('mcg_ADMIN', admin_url());

define('mcg_BlogUrl', get_bloginfo('url'));

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );



require_once( mcg_ROOT . '/lib/mcg_enqueue_scripts.php' );



require_once( mcg_ROOT . '/lib/mcg_theme_init.php' );



require_once( mcg_ROOT . '/lib/mcg_functions.php');



require_once( mcg_ROOT . '/lib/mcg_meta_fields.php');



require_once(mcg_ROOT  . '/lib/wp_bootstrap_navwalker.php');



require_once( mcg_ROOT . '/switching_language/home_page_switch.php');



require_once( mcg_ROOT . '/switching_language/about_page_switch.php');



require_once( mcg_ROOT . '/switching_language/service_center_switch.php');




register_nav_menus();



function mcg_menu() {

wp_nav_menu( array(

    'menu'              => 'Main Menu',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}

function mcg_menu_ar() {

wp_nav_menu( array(

    'menu'              => 'Main Menu Arabic',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}



function mcg_language() {

wp_nav_menu( array(

    'menu'              => 'Languages Menu',

    'container'         => '',

    'theme_location'    => 'main-menu',

    'menu_class'        => 'navigation clearfix',

    'depth'             => 3,

    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',

    'walker'            => new wp_bootstrap_navwalker())

 );

}





function mcg_mime_types( $mimes ) {

    $mimes['svg']  = 'image/svg+xml';

    $mimes['svgz'] = 'image/svg+xml';

    return $mimes;

}



add_filter( 'upload_mimes', 'mcg_mime_types' );

/*Remove Title TO Anchor Tag Menu*/

function my_menu_notitle( $menu ){

  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}

add_filter( 'wp_nav_menu', 'my_menu_notitle' );

add_filter( 'wp_page_menu', 'my_menu_notitle' );

add_filter( 'wp_list_categories', 'my_menu_notitle' );



/*Add Footer Widget*/

function mcg_widgets_init() {



  register_sidebar( array(

    'name'          => 'First Sidebar Column',

    'id'            => 'first_sidebar',

    'before_widget' => '<div>',

    'after_widget'  => '</div>',

  ));

}

add_action( 'widgets_init', 'mcg_widgets_init' );


function mcg_second_widgets_init() {



  register_sidebar( array(

    'name'          => 'Second Sidebar Column',

    'id'            => 'second_sidebar',

    'before_widget' => '<div>',

    'after_widget'  => '</div>',

  ));

}

add_action( 'widgets_init', 'mcg_second_widgets_init' );



add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );

function wti_remove_autop_for_image( $content )

{

    global $post;

    // Check for single page and image post type and remove

    if ( is_single() && $post->post_type == 'image' )

        remove_filter('the_content', 'wpautop');

    return $content;

}

remove_filter( 'the_content', 'wpautop' );

remove_filter( 'the_excerpt', 'wpautop' );



function mcg_load_theme_textdomain() {

    load_theme_textdomain( 'mcg', get_template_directory() . '/languages' );

}

add_action( 'after_setup_theme', 'mcg_load_theme_textdomain' );


function remove_wp_logo($wp_admin_bar) {
  $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_wp_logo', 999);

function change_footer_admin() {
  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');

function tinymce_remove_root_block_tag( $init ) {
    $init['forced_root_block'] = false; 
    return $init;
}
add_filter( 'tiny_mce_before_init', 'tinymce_remove_root_block_tag' );
