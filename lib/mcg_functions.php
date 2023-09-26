<?php 

function mcg_get_slider($no){

    $args = array(

        'post_type'       => 'slider',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}

 

function mcg_get_services($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'services',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function mcg_get_brands($no, $term_name){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'brands',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC',

        'tax_query' => array(

            array(
                'taxonomy' => 'brands_cat',
                'field' => 'slug',
                'terms' => $term_name
            )

        )
    );

    return $posts = new WP_Query( $args );    

}



function mcg_get_affiliate($no){

    $args = array(

        'post_type'       => 'affiliate',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function mcg_get_careers($no){

    $args = array(

        'post_type'       => 'careers',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function mcg_get_events($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'events',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function mcg_get_news($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'post',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}



function mcg_get_brands_with_tax($no,$term_id){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'brands',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'DESC',

        'tax_query' => array(

            array(

                'taxonomy' => 'brands_cat',

                'field' => 'term_id',

                'terms' => $term_id,

            ),

        ),

    );

    return $posts = new WP_Query( $args );    

}

function mcg_get_service_center($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'service-center',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}


function mcg_get_brands_service_center($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'brands-service',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}

function mcg_get_equipment($no){

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(

        'post_type'       => 'equipment',

        'post_status'     => 'publish',

        'posts_per_page'  =>  $no,

        'paged'           =>  $paged,

        'orderby'         => 'date',

        'order'           => 'ASC'

    );

    return $posts = new WP_Query( $args );    

}