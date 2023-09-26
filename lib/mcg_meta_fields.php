<?php 

/*********************************



Add Link Meta Box To Slider



**********************************/



function mcg_add_slider_data_meta() {



    add_meta_box( "slider_extra_data", "Additional Data" , "mcg_slider_data_callback", array('slider'), "normal" );

}





add_action( 'add_meta_boxes', 'mcg_add_slider_data_meta' );





/* Display the post meta box. */



function mcg_slider_data_callback( $object, $box ) { 

    $mcg_slider_link_text = esc_attr( get_post_meta( $object->ID, 'mcg_slider_link_text', true ) );

    $mcg_slider_link_url = esc_attr( get_post_meta( $object->ID, 'mcg_slider_link_url', true ) );

    $mcg_slider_link_text_ar = esc_attr( get_post_meta( $object->ID, 'mcg_slider_link_text_ar', true ) );

    $mcg_slider_link_url_ar = esc_attr( get_post_meta( $object->ID, 'mcg_slider_link_url_ar', true ) );



?>

<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_slider_link_text"><?php _e('Link Text: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_slider_link_text" class="form-control w-100" value="<?php echo $mcg_slider_link_text; ?>"><br>

            </div>

        </div>

    </div>

</div>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_slider_link_url"><?php _e('Link URL: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_slider_link_url" class="form-control w-100" value="<?php echo $mcg_slider_link_url; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php else: ?>

<div dir="rtl" class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_slider_link_text_ar"><?php _e('نص الرابط: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_slider_link_text_ar" class="form-control w-100" value="<?php echo $mcg_slider_link_text_ar; ?>"><br>

            </div>

        </div>

    </div>

</div>

<div dir="rtl" class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_slider_link_url_ar"><?php _e('عنوان الرابط: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_slider_link_url_ar" class="form-control w-100" value="<?php echo $mcg_slider_link_url_ar; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php endif ?>

   

<?php



}



function mcg_add_services_data_meta() {



    add_meta_box( "services_extra_data", "Additional Data" , "mcg_services_data_callback", array('services'), "normal" );

}





add_action( 'add_meta_boxes', 'mcg_add_services_data_meta' );





/* Display the post meta box. */



function mcg_services_data_callback( $object, $box ) { 

    $mcg_services_icon = esc_attr( get_post_meta( $object->ID, 'mcg_services_icon', true ) );



?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_services_icon"><?php _e('Flaticon Icon: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_services_icon" class="form-control w-100" value="<?php echo $mcg_services_icon; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php



}



function mcg_add_careers_data_meta() {



    add_meta_box( "careers_extra_data", "Additional Data" , "mcg_careers_data_callback", array('careers'), "normal" );

}





add_action( 'add_meta_boxes', 'mcg_add_careers_data_meta' );





/* Display the post meta box. */



function mcg_careers_data_callback( $object, $box ) { 

    $mcg_careers = esc_attr( get_post_meta( $object->ID, 'mcg_careers', true ) );

    $mcg_careers_ar = esc_attr( get_post_meta( $object->ID, 'mcg_careers_ar', true ) );

?>

<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_careers"><?php _e('Contact Form Shortcode: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_careers" class="form-control w-100" value="<?php echo $mcg_careers; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php else: ?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_careers_ar"><?php _e('Contact Form Shortcode Arabic: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_careers_ar" class="form-control w-100" value="<?php echo $mcg_careers_ar; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php endif ?>



<?php



}



function mcg_add_brands_data_meta() {



    add_meta_box( "brands_extra_data", "Additional Data" , "mcg_brands_data_callback", array('brands'), "normal" );

}





add_action( 'add_meta_boxes', 'mcg_add_brands_data_meta' );





/* Display the post meta box. */



function mcg_brands_data_callback( $object, $box ) { 

    $mcg_brands = esc_attr( get_post_meta( $object->ID, 'mcg_brands', true ) );

    $mcg_brands_ar = esc_attr( get_post_meta( $object->ID, 'mcg_brands_ar', true ) );

?>

<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

<!-- <div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <label for="mcg_careers"><?php //_e('Short Description: ','mcg'); ?></label>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">

               <?php //wp_editor( $mcg_brands, 'recipe_directions', array( 'textarea_name' => 'mcg_brands', 'media_buttons' => true, 'tinymce' => array() ) ); ?>
            </div>

        </div>

    </div>

</div> -->

<?php else: ?>

<<!-- div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <label for="mcg_careers_ar"><?php //_e('Short Description Arabic: ','mcg'); ?></label>

            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
              <?php //wp_editor( $mcg_brands_ar, 'recipe_directions', array( 'textarea_name' => 'mcg_brands_ar', 'media_buttons' => true, 'tinymce' => array() ) ); ?>
            </div>

        </div>

    </div>

</div> -->

<?php endif ?>



<?php



}

function mcg_add_events_data_meta() {



    add_meta_box( "events_extra_data", "Additional Data" , "mcg_events_data_callback", array('events'), "normal" );

}





add_action( 'add_meta_boxes', 'mcg_add_events_data_meta' );





/* Display the post meta box. */



function mcg_events_data_callback( $object, $box ) { 

    $mcg_events_time = esc_attr( get_post_meta( $object->ID, 'mcg_events_time', true ) );

    $mcg_events_time_ar = esc_attr( get_post_meta( $object->ID, 'mcg_events_time_ar', true ) );

    $mcg_events_location = esc_attr( get_post_meta( $object->ID, 'mcg_events_location', true ) );

    $mcg_events_location_ar = esc_attr( get_post_meta( $object->ID, 'mcg_events_location_ar', true ) );

?>


<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_events_time"><?php _e('Event Time: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_events_time" class="form-control w-100" value="<?php echo $mcg_events_time; ?>"><br>

            </div>

        </div>

    </div>

</div>

<div class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_events_location"><?php _e('Event Location: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_events_location" class="form-control w-100" value="<?php echo $mcg_events_location; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php else: ?>

<div dir="rtl" class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_events_time_ar"><?php _e('وقت الحدث: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_events_time_ar" class="form-control w-100" value="<?php echo $mcg_events_time_ar; ?>"><br>

            </div>

        </div>

    </div>

</div>

<div dir="rtl" class="form-group row mt-3">

    <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-3">

                <label for="mcg_events_location_ar"><?php _e('مكان الحدث: ','mcg'); ?></label>

            </div>

            <div class="col-lg-9 col-md-9 col-sm-9">

                <input type="text"  name="mcg_events_location_ar" class="form-control w-100" value="<?php echo $mcg_events_location_ar; ?>"><br>

            </div>

        </div>

    </div>

</div>

<?php endif ?>
<?php



}

add_action( 'save_post', 'mcg_save_custom_meta', 10, 2 );





function mcg_save_custom_meta($post_id){



    if( isset($_POST['mcg_slider_link_text']) ){



        update_post_meta($post_id, 'mcg_slider_link_text', $_POST['mcg_slider_link_text']);



    }



    else



        delete_post_meta($post_id,'mcg_slider_link_text');





    if( isset($_POST['mcg_slider_link_url']) ){



        update_post_meta($post_id, 'mcg_slider_link_url', $_POST['mcg_slider_link_url']);



    }



    else



        delete_post_meta($post_id,'mcg_slider_link_url');



    if( isset($_POST['mcg_slider_link_text_ar']) ){



        update_post_meta($post_id, 'mcg_slider_link_text_ar', $_POST['mcg_slider_link_text_ar']);



    }



    else



        delete_post_meta($post_id,'mcg_slider_link_text_ar');





    if( isset($_POST['mcg_slider_link_url_ar']) ){



        update_post_meta($post_id, 'mcg_slider_link_url_ar', $_POST['mcg_slider_link_url_ar']);



    }



    else



        delete_post_meta($post_id,'mcg_slider_link_url_ar');



    if( isset($_POST['mcg_services_icon']) ){



        update_post_meta($post_id, 'mcg_services_icon', $_POST['mcg_services_icon']);



    }



    else



        delete_post_meta($post_id,'mcg_services_icon');



     if( isset($_POST['mcg_careers']) ){



        update_post_meta($post_id, 'mcg_careers', $_POST['mcg_careers']);



    }



    else



        delete_post_meta($post_id,'mcg_careers');



     if( isset($_POST['mcg_careers_ar']) ){



        update_post_meta($post_id, 'mcg_careers_ar', $_POST['mcg_careers_ar']);



    }



    else
        delete_post_meta($post_id,'mcg_careers_ar');


     if( isset($_POST['mcg_brands']) ){
        update_post_meta($post_id, stripcslashes('mcg_brands'), $_POST['mcg_brands']);
    }

    else
        delete_post_meta($post_id,'mcg_brands');
     if( isset($_POST['mcg_brands_ar']) ){
        update_post_meta($post_id, stripcslashes('mcg_brands_ar'), $_POST['mcg_brands_ar']);
    }



    else



        delete_post_meta($post_id,'mcg_brands_ar');

    



    if( isset($_POST['mcg_events_time']) ){



        update_post_meta($post_id, 'mcg_events_time', $_POST['mcg_events_time']);



    }



    else



        delete_post_meta($post_id,'mcg_events_time');



     if( isset($_POST['mcg_events_location']) ){



        update_post_meta($post_id, 'mcg_events_location', $_POST['mcg_events_location']);



    }



    else



        delete_post_meta($post_id,'mcg_events_location');





   if( isset($_POST['mcg_events_time_ar']) ){



        update_post_meta($post_id, 'mcg_events_time_ar', $_POST['mcg_events_time_ar']);



    }



    else



        delete_post_meta($post_id,'mcg_events_time_ar');



     if( isset($_POST['mcg_events_location_ar']) ){



        update_post_meta($post_id, 'mcg_events_location_ar', $_POST['mcg_events_location_ar']);



    }



    else



        delete_post_meta($post_id,'mcg_events_location_ar');

}












