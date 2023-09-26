<?php
function mcg_admin_scripts_styles($hook) {
	wp_enqueue_style( 'mcg-main', mcg_URL . 'assets/admin/css/main-style.css');
    //var_dump($hook);
	$mcg_pages = ['toplevel_page_content-area','mcg-options_page_home-page-content','mcg-options_page_about-page-content','mcg-options_page_services-page-content','mcg-options_page_contacts-page-content','post.php','post-new.php'];
	if( in_array($hook, $mcg_pages) ) {

        wp_enqueue_style( 'mcg-bootsrtap', mcg_URL . 'assets/admin/css/bootstrap.min.css');
        wp_enqueue_style( 'mcg-style', mcg_URL . 'assets/admin/css/style.css');
            /*wp_enqueue_style( 'mcg-bootsrtap', mcg_URL . 'assets/admin/css/bootstrap.rtl.min.css');
            wp_enqueue_style( 'mcg-style', mcg_URL . 'assets/admin/css/style.css');
            wp_enqueue_style( 'mcg-style-rtl', mcg_URL . 'assets/admin/css/style.rtl.css');*/
        wp_enqueue_script( 'mcg-popper', mcg_URL .'assets/admin/js/popper.min.js', array() ,false, true );
        wp_enqueue_script( 'mcg-bootsrtap',mcg_URL .'assets/admin/js/bootstrap.bundle.min.js', array() ,false, true );
		wp_enqueue_script( 'mcg-script', mcg_URL .'assets/admin/js/script.js', array() ,false, true );
		if(function_exists( 'wp_enqueue_media' )){
			wp_enqueue_media();
		}else{
			wp_enqueue_style('thickbox');
			wp_enqueue_script('media-upload');
			wp_enqueue_script('thickbox');
		}
	}
}
 
add_action('admin_enqueue_scripts', 'mcg_admin_scripts_styles');


function mcg_scripts_styles() {


    wp_enqueue_style( 'mcg-bootstrap-css', mcg_URL . 'assets/css/bootstrap.min.css' );

    wp_enqueue_style( 'mcg-fontawesome-css', mcg_URL . 'assets/css/fontawesome-all.css' );

    wp_enqueue_style( 'mcg-bootstrap-select-css', mcg_URL . 'assets/css/owl.css' );

    wp_enqueue_style('mcg-owl-carousel-css', mcg_URL . 'assets/css/flaticon.css');

    wp_enqueue_style( 'mcg-animate-css', mcg_URL . 'assets/css/animate.css' ); 

    wp_enqueue_style( 'mcg-jquery-ui-css', mcg_URL . 'assets/css/jquery-ui.css' );

    wp_enqueue_style( 'mcg-fancybox-css', mcg_URL . 'assets/css/jquery.fancybox.min.css' );

    wp_enqueue_style( 'mcg-hover-css', mcg_URL . 'assets/css/hover.css">' );

    wp_enqueue_style( 'mcg-jarallax-css', mcg_URL . 'assets/css/jarallax.css' );

    wp_enqueue_style( 'mcg-custom-animate-css', mcg_URL . 'assets/css/custom-animate.css' );

    wp_enqueue_style( 'mcg-style-css', mcg_URL . 'assets/css/style.css' );
if ( ICL_LANGUAGE_CODE=='ar' ) :
    wp_enqueue_style( 'mcg-rtl-css', mcg_URL . 'assets/css/rtl.css' );
endif;

    wp_enqueue_style( 'mcg-responsive-css', mcg_URL . 'assets/css/responsive.css' );

    wp_enqueue_style( 'mcg-color-default-css', mcg_URL . 'assets/css/colors/color-default.css' );

    wp_enqueue_style( 'mcg-teko-css', 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Teko:wght@300;400;500;600;700&display=swap' );
    


    wp_enqueue_script( 'mcg-jquery-js',  mcg_URL . 'assets/js/jquery.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-popper-js', mcg_URL . 'assets/js/popper.min.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-bootsrtap-js',  mcg_URL . 'assets/js/bootstrap.min.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-TweenMax-js',  mcg_URL . 'assets/js/TweenMax.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-jquery-ui-js',  mcg_URL . 'assets/js/jquery-ui.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-fancybox-js',  mcg_URL . 'assets/js/jquery.fancybox.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-owl-js',  mcg_URL . 'assets/js/owl.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-mixitup-js',  mcg_URL . 'assets/js/mixitup.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-appear-js',  mcg_URL . 'assets/js/appear.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-wow-js',  mcg_URL . 'assets/js/wow.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-jquery-easing-js',  mcg_URL . 'assets/js/jquery.easing.min.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-jarallax-js',  mcg_URL . 'assets/js/jarallax.min.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-validate-js',  mcg_URL . 'assets/js/validate.js' , array() ,false, true );
    wp_enqueue_script( 'mcg-custom-script-js',  mcg_URL . 'assets/js/custom-script.js' , array() ,false, true );
}
add_action( 'wp_enqueue_scripts', 'mcg_scripts_styles' );

