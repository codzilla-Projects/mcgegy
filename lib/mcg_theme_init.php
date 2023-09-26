<?php 

function mcg_register_custom_menu(){



	add_theme_support('post-thumbnails');



	$label = array(



	        'name'                  => _x( 'sliders', 'Homepage slider', 'mcg' ),



	        'singular_name'         => _x( 'sliders', 'Post type singular name', 'mcg' ),



	        'menu_name'             => _x( 'sliders', 'Admin Menu text', 'mcg' ),



	        'name_admin_bar'        => _x( 'sliders', 'Add New on Toolbar', 'mcg' ),



	        'add_new'               => __( 'Add New slider', 'mcg' ),



	        'add_new_item'          => __( 'Add New slider', 'mcg' ),



	        'new_item'              => __( 'New slider', 'mcg' ),



	        'edit_item'             => __( 'Edit slider', 'mcg' ),



	        'view_item'             => __( 'View slider', 'mcg' ),



	        'all_items'             => __( 'All slider', 'mcg' ),



	        'search_items'          => __( 'Search slider', 'mcg' ),



	        'parent_item_colon'     => __( 'Parent slider:', 'mcg' ),



	        'not_found'             => __( 'No slider found.', 'mcg' ),



	        'not_found_in_trash'    => __( 'No slider found in Trash.', 'mcg' ),



	    );     



	    $arg = array(



	        'labels'             => $label,



	        'description'        => 'Homepage slider.',



	        'public'             => true,



	        'publicly_queryable' => true,



	        'show_ui'            => true,



	        'show_in_menu'       => true,



	        'query_var'          => true,



	        'capability_type'    => 'post',



	        'has_archive'        => true,



	        'hierarchical'       => false,



	        'menu_position'      => 5,



	        'menu_icon'			 => 'dashicons-slides',



	        'supports'           => array( 'title','editor', 'thumbnail' ),



	        'rewrite'            => array( 'slug' => 'slider' ),



	        'show_in_rest'       => true



	    );



      



    register_post_type( 'slider', $arg );





    $label = array(



            'name'                  => _x( 'Services', 'Services', 'mcg' ),



            'singular_name'         => _x( 'Services', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Services', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Services', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Services', 'mcg' ),



            'add_new_item'          => __( 'Add New Services', 'mcg' ),



            'new_item'              => __( 'New Services', 'mcg' ),



            'edit_item'             => __( 'Edit Services', 'mcg' ),



            'view_item'             => __( 'View Services', 'mcg' ),



            'all_items'             => __( 'All Services', 'mcg' ),



            'search_items'          => __( 'Search Services', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Services:', 'mcg' ),



            'not_found'             => __( 'No Services found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Services found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Services',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 6,



            'menu_icon'          => 'dashicons-image-filter',



            'supports'           => array( 'title','editor', 'thumbnail' ),



            'rewrite'            => array( 'slug' => 'services' ),



            'show_in_rest'       => true



        );



      



    register_post_type( 'services', $arg );



        $label = array(



            'name'                  => _x( 'Brands', 'Brands', 'mcg' ),



            'singular_name'         => _x( 'Brands', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Brands', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Brands', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Brands', 'mcg' ),



            'add_new_item'          => __( 'Add New Brands', 'mcg' ),



            'new_item'              => __( 'New Brands', 'mcg' ),



            'edit_item'             => __( 'Edit Brands', 'mcg' ),



            'view_item'             => __( 'View Brands', 'mcg' ),



            'all_items'             => __( 'All Brands', 'mcg' ),



            'search_items'          => __( 'Search Brands', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Brands:', 'mcg' ),



            'not_found'             => __( 'No Brands found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Brands found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Brands',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 7,



            'menu_icon'          => 'dashicons-grid-view',



            'supports'           => array( 'title','editor', 'thumbnail', 'excerpt' ),



            'rewrite'            => array( 'slug' => 'brands' ),



            'show_in_rest'       => true



        );



      



    register_post_type( 'brands', $arg );







    $label = array(



            'name'                  => _x( 'Affiliate', 'Affiliate', 'mcg' ),



            'singular_name'         => _x( 'Affiliate', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Affiliate', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Affiliate', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Affiliate', 'mcg' ),



            'add_new_item'          => __( 'Add New Affiliate', 'mcg' ),



            'new_item'              => __( 'New Affiliate', 'mcg' ),



            'edit_item'             => __( 'Edit Affiliate', 'mcg' ),



            'view_item'             => __( 'View Affiliate', 'mcg' ),



            'all_items'             => __( 'All Affiliate', 'mcg' ),



            'search_items'          => __( 'Search Affiliate', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Affiliate:', 'mcg' ),



            'not_found'             => __( 'No Affiliate found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Affiliate found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Affiliate',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 8,



            'menu_icon'          => 'dashicons-groups',



            'supports'           => array( 'comments', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),



            'rewrite'            => array( 'slug' => 'affiliate' ),



            'show_in_rest'       => true



        );



    register_post_type( 'affiliate', $arg );



        $label = array(



            'name'                  => _x( 'Careers', 'Careers', 'mcg' ),



            'singular_name'         => _x( 'Careers', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Careers', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Careers', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Careers', 'mcg' ),



            'add_new_item'          => __( 'Add New Careers', 'mcg' ),



            'new_item'              => __( 'New Careers', 'mcg' ),



            'edit_item'             => __( 'Edit Careers', 'mcg' ),



            'view_item'             => __( 'View Careers', 'mcg' ),



            'all_items'             => __( 'All Careers', 'mcg' ),



            'search_items'          => __( 'Search Careers', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Careers:', 'mcg' ),



            'not_found'             => __( 'No Careers found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Careers found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Careers',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 9,



            'menu_icon'          => 'dashicons-visibility',



            'supports'           => array( 'comments', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),



            'rewrite'            => array( 'slug' => 'careers' ),



            'show_in_rest'       => true



        );



    register_post_type( 'careers', $arg );



        $label = array(



            'name'                  => _x( 'Events', 'Events', 'mcg' ),



            'singular_name'         => _x( 'Events', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Events', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Events', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Events', 'mcg' ),



            'add_new_item'          => __( 'Add New Events', 'mcg' ),



            'new_item'              => __( 'New Events', 'mcg' ),



            'edit_item'             => __( 'Edit Events', 'mcg' ),



            'view_item'             => __( 'View Events', 'mcg' ),



            'all_items'             => __( 'All Events', 'mcg' ),



            'search_items'          => __( 'Search Events', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Events:', 'mcg' ),



            'not_found'             => __( 'No Events found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Events found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Events',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 10,



            'menu_icon'          => 'dashicons-calendar-alt',



            'supports'           => array( 'comments', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),



            'rewrite'            => array( 'slug' => 'events' ),



            'show_in_rest'       => true



        );



    register_post_type( 'events', $arg );


            $label = array(



            'name'                  => _x( 'Service Center', 'Service Center', 'mcg' ),



            'singular_name'         => _x( 'Service Center', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Service Center', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Service Center', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Service Center', 'mcg' ),



            'add_new_item'          => __( 'Add New Service Center', 'mcg' ),



            'new_item'              => __( 'New Service Center', 'mcg' ),



            'edit_item'             => __( 'Edit Service Center', 'mcg' ),



            'view_item'             => __( 'View Service Center', 'mcg' ),



            'all_items'             => __( 'All Service Center', 'mcg' ),



            'search_items'          => __( 'Search Service Center', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Service Center:', 'mcg' ),



            'not_found'             => __( 'No Service Center found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Service Center found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Service Center',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 11,



            'menu_icon'          => 'dashicons-admin-settings',



            'supports'           => array( 'comments', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),



            'rewrite'            => array( 'slug' => 'service-center' ),



            'show_in_rest'       => true



        );



    register_post_type( 'service-center', $arg );


            $label = array(



            'name'                  => _x( 'Brands Service Center', 'Brands Service Center', 'mcg' ),



            'singular_name'         => _x( 'Brands Service Center', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Brands Service Center', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Brands Service Center', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Brands Service Center', 'mcg' ),



            'add_new_item'          => __( 'Add New Brands Service Center', 'mcg' ),



            'new_item'              => __( 'New Brands Service Center', 'mcg' ),



            'edit_item'             => __( 'Edit Brands Service Center', 'mcg' ),



            'view_item'             => __( 'View Brands Service Center', 'mcg' ),



            'all_items'             => __( 'All Brands Service Center', 'mcg' ),



            'search_items'          => __( 'Search Brands Service Center', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Brands Service Center:', 'mcg' ),



            'not_found'             => __( 'No Brands Service Center found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Brands Service Center found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Brands Service Center',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 12,



            'menu_icon'          => 'dashicons-list-view',



            'supports'           => array( 'comments', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),



            'rewrite'            => array( 'slug' => 'brands-service' ),



            'show_in_rest'       => true



        );



    register_post_type( 'brands-service', $arg );


            $label = array(



            'name'                  => _x( 'Equipment', 'Equipment', 'mcg' ),



            'singular_name'         => _x( 'Equipment', 'Post type singular name', 'mcg' ),



            'menu_name'             => _x( 'Equipment', 'Admin Menu text', 'mcg' ),



            'name_admin_bar'        => _x( 'Equipment', 'Add New on Toolbar', 'mcg' ),



            'add_new'               => __( 'Add New Equipment', 'mcg' ),



            'add_new_item'          => __( 'Add New Equipment', 'mcg' ),



            'new_item'              => __( 'New Equipment', 'mcg' ),



            'edit_item'             => __( 'Edit Equipment', 'mcg' ),



            'view_item'             => __( 'View Equipment', 'mcg' ),



            'all_items'             => __( 'All Equipment', 'mcg' ),



            'search_items'          => __( 'Search Equipment', 'mcg' ),



            'parent_item_colon'     => __( 'Parent Equipment:', 'mcg' ),



            'not_found'             => __( 'No Equipment found.', 'mcg' ),



            'not_found_in_trash'    => __( 'No Equipment found in Trash.', 'mcg' ),



        );     



        $arg = array(



            'labels'             => $label,



            'description'        => 'Equipment',



            'public'             => true,



            'publicly_queryable' => true,



            'show_ui'            => true,



            'show_in_menu'       => true,



            'query_var'          => true,



            'capability_type'    => 'post',



            'has_archive'        => true,



            'hierarchical'       => false,



            'menu_position'      => 13,



            'menu_icon'          => 'dashicons-sort',



            'supports'           => array( 'comments', 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'revisions', 'page-attributes' ),



            'rewrite'            => array( 'slug' => 'equipment' ),



            'show_in_rest'       => true



        );



    register_post_type( 'equipment', $arg );



    /*-----------------------------------------------------------------------------------------------*/

}

add_action( 'init', 'products_custom_tax', 0 );

function products_custom_tax() 

{

    $ser_taxonomies = array(

        array(



          'labels' => array(



            'name'                          => _x( 'Categories', 'taxonomy general name' ),

            'singular_name'                 => _x( 'Category', 'taxonomy singular name' ),

            'search_items'                  =>  __( 'Search categories','freezoner' ),

            'popular_items'                 => __( 'Popular Categories' ,'freezoner'),

            'all_items'                     => __( 'All categories' ,'freezoner'),

            'parent_item'                   => __('Parent'),

            'parent_item_colon'             => null,

            'edit_item'                     => __( 'Edit Category' ), 

            'update_item'                   => __( 'Update Category' ),

            'add_new_item'                  => __( 'Add new category' ),

            'new_item_name'                 => __( 'New Category' ),

            'separate_items_with_commas'    => __( 'Seperate categories with commas' ),

            'add_or_remove_items'           => __( 'Add or remove category' ),

            'choose_from_most_used'         => __( 'Choose from most used categories' ),

            'menu_name'                     => __( 'Categories' ),

          ),

          'tax_name'         => 'brands_cat',

          'post_types'       =>  array('brands'),

          'slug'             => 'brands-category'          

        )

    );



  // Add new taxonomy, NOT hierarchical (like tags)

    foreach ($ser_taxonomies as $tax) {

      register_taxonomy($tax['tax_name'],$tax['post_types'],array(

        'hierarchical' => true,

        'labels' => $tax['labels'],

        'show_ui' => true,

        'update_count_callback' => '_update_post_term_count',

        'query_var' => true,

        'rewrite' => array( 'slug' => $tax['slug'] ),



      ));

    }

}







add_action('init','mcg_register_custom_menu');



/* create my custom menu pages */



function mcg_register_custom_menu_pages() {



    add_menu_page(



        'website options',



        'mcg Options',



        'manage_options',



        'content-area',



        'main_content_area_callback',



        mcg_URL.'assets/images/favicon.png',



        2



    ); 

        add_submenu_page(



        'content-area',



        'Home Options',



        'Home Page Options',



        'manage_options',



        'home-page-content',



        'home_page_area_callback'



    );

    add_submenu_page(



        'content-area',



        'About Options',



        'About Page Options',



        'manage_options',



        'about-page-content',



        'about_page_area_callback'



    );   

    add_submenu_page(



        'content-area',



        'Service Center Options',



        'Services Page Options',



        'manage_options',



        'services-page-content',



        'services_page_area_callback'



    );  

    add_submenu_page(



        'content-area',



        'Contacts Options',



        'Contacts Page Options',



        'manage_options',



        'contacts-page-content',



        'contacts_page_area_callback'



    );   

}



add_action( 'admin_menu', 'mcg_register_custom_menu_pages' );



require_once ( mcg_ROOT . 'mcg_options/mcg_options.php');

require_once ( mcg_ROOT . 'mcg_options/home_options.php');

require_once ( mcg_ROOT . 'mcg_options/about_options.php');

require_once ( mcg_ROOT . 'mcg_options/services_options.php');

require_once ( mcg_ROOT . 'mcg_options/contacts_options.php');



add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo() { ?>

    <style type="text/css">

        body{

            background:#c5c5d8!important; 

        }

        #login h1 a, .login h1 a {

            background-image: url(<?= get_option('mcg_logo_img'); ?>);

            width: 100%;

            height: 100px;

            background-size: contain;

            margin: 0 auto;

        }

        .login form{

            background: rgba(3, 3, 4, .9)!important;

            border-radius: .5rem;

        }

        .login label{

            font-weight: 600!important;

            color: #fff!important;

        }

        .wp-core-ui p .button {

            background: rgba(3, 3, 4, .9)!important;

            border-color: rgba(3, 3, 4, .9)!important;

        }

        .wp-core-ui p .button:hover{

            background-color: #005b52 !important;

            border-color: #005b52 !important;

            color: #fff;

        }

        #reg_passmail{color:#fff;}

    </style>

<?php }

