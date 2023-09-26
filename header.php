<!DOCTYPE html>

<html lang="en" class="<?php if ( ICL_LANGUAGE_CODE=='ar' ){echo "translated-rtl";}else{echo "translated-ltr";}?> ">



<head>

    <meta charset="utf-8">

    <title>

        <?php wp_title('|','true','right') ?>

        <?php bloginfo('name'); ?>

    </title>

    <!-- Stylesheets -->

    <link rel="preconnect" href="https://fonts.gstatic.com">



    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?=mcg_URL ?>assets/images/favicon.png" id="fav-shortcut" type="image/x-icon">

    <link rel="icon" href="<?=mcg_URL ?>assets/images/favicon.png" id="fav-icon" type="image/x-icon">



    <!-- Responsive Settings -->

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->

    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>



<body>



    <div class="page-wrapper">



        <!-- Preloader -->

        <div class="preloader">

            <img src="<?=mcg_URL ?>assets/images/icons/loader3.gif">

        </div>



        <!-- Main Header -->

        <header class="main-header header-style-one">



            <!-- Header Upper -->

            <div class="header-upper">

                <div class="inner-container clearfix">

                    <!--Logo-->

                    <div class="logo-box">

                        <div class="logo">

                        	<a href="<?php bloginfo('url'); ?>" title="Misr Castle Group"><img

                                    src="<?= get_option('mcg_logo_img'); ?>" id="thm-logo" alt="Misr Castle Group"

                                    >

                            </a>

                        </div>

                    </div>

                    <div class="nav-outer clearfix">

                        <!--Mobile Navigation Toggler-->

                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span

                                class="txt">Menu</span></div>



                        <!-- Main Menu -->

                        <nav class="main-menu navbar-expand-md navbar-light">

                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">

                            <?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

                            <?php mcg_menu(); ?>

                            <?php else: ?>

                            <?php mcg_menu_ar(); ?>

                            <?php endif; ?> 
 
                            </div>

                        </nav>

                    </div>



                    <div class="other-links clearfix">

                        <div class="link-box">

                            <div class="call-us">

                                <a class="link" href="tel:<?= get_option('mcg_phone'); ?>">

                                    <span class="icon"></span>

                                    <span class="sub-text"><?php _e('Hot Line','mcg'); ?></span>

                                    <span class="number"><?= get_option('mcg_phone'); ?></span>

                                </a>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

            <!--End Header Upper-->



        </header>

        <!-- End Main Header -->



        <!--Mobile Menu-->

        <div class="side-menu__block">





            <div class="side-menu__block-overlay custom-cursor__overlay">

                <div class="cursor"></div>

                <div class="cursor-follower"></div>

            </div><!-- /.side-menu__block-overlay -->

            <div class="side-menu__block-inner ">

                <div class="side-menu__top justify-content-end">



                    <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="<?=mcg_URL ?>assets/images/icons/close-1-1.png"

                            alt=""></a>

                </div><!-- /.side-menu__top -->





                <nav class="mobile-nav__container">

                    <!-- content is loading via js -->

                </nav>

                <div class="side-menu__sep"></div><!-- /.side-menu__sep -->

                <div class="side-menu__content">

                    <p><a href="mailto:<?= get_option('mcg_email'); ?>"><?= get_option('mcg_email'); ?></a> <br> <a href="tel:<?= get_option('mcg_phone'); ?>"><?= get_option('mcg_phone'); ?></a></p>

                    <div class="side-menu__social">

                        <?php $facebook = get_option('mcg_fb');  

                       	if(!empty($facebook)) :

                       	?>

                       	<a href="<?= $facebook; ?>"><span class="fab fa-facebook-f"></span></a>

                       	<?php endif; ?>

                      	<?php $instagram = get_option('mcg_insta');  

                       	if(!empty($instagram)) :

                       	?>

                       	<a href="<?= $instagram; ?>"><span class="fab fa-instagram"></span></a>

                       	<?php endif; ?>

                       	<?php $linkedin = get_option('mcg_linkedin');  

                       	if(!empty($linkedin)) :

                       	?>

                       	<a href="<?= $linkedin; ?>"><span class="fab fa-linkedin-in"></span></a>

                       	<?php endif; ?>

                    </div>

                </div><!-- /.side-menu__content -->

            </div><!-- /.side-menu__block-inner -->

        </div><!-- /.side-menu__block -->



        <!--Search Popup-->

        <div class="search-popup">

            <div class="search-popup__overlay custom-cursor__overlay">

                <div class="cursor"></div>

                <div class="cursor-follower"></div>

            </div><!-- /.search-popup__overlay -->

            <div class="search-popup__inner">

                <form action="#" class="search-popup__form">

                    <input type="text" name="search" placeholder="Type here to Search....">

                    <button type="submit"><i class="fa fa-search"></i></button>

                </form>

            </div><!-- /.search-popup__inner -->

        </div><!-- /.search-popup -->

