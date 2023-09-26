        <!-- Main Footer -->

        <footer class="main-footer">

            <div class="auto-container">

                <!--Widgets Section-->

                <div class="widgets-section">

                    <div class="row clearfix">



                        <!--Column-->

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget logo-widget">

                                <div class="widget-content text-center">

                                    <div class="logo">

                                        <a href="<?php bloginfo('url') ?>"><img id="fLogo" src="<?= get_option('mcg_footer_logo_img'); ?>" alt="" /></a>

                                    </div>

                                    <div class="text">

                                        <?php 

                                            $footer_content = get_option('footer_content');

                                            $footer_content_ar = get_option('footer_content_ar'); 

                                        switch ( ICL_LANGUAGE_CODE ){

                                            case 'en':

                                                $footer_text = $footer_content;

                                                break;

                                            case 'ar':

                                                $footer_text = $footer_content_ar;

                                                break;

                                            default:

                                                $footer_text = '';

                                        }

                                        ?>



                                       <?php $footer_text; ?>

                                    </div>

                                    

                                </div>

                            </div>

                        </div>



                        <!--Column-->

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <div class="widget-content">

                                    <h6><?php _e('Useful Links','mcg'); ?></h6>

                                    <div class="row clearfix">

                                        <div class="col-md-12 col-sm-12">

                                            <ul>

                                                <?php if ( is_active_sidebar('first_sidebar') ) : ?>

				                                    <?php dynamic_sidebar('first_sidebar'); ?>

				                                <?php endif; ?>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget links-widget">

                                <div class="widget-content">

                                    <h6><?php _e('Brands','mcg'); ?></h6>

                                    <div class="row clearfix">

                                        <div class="col-md-12 col-sm-12">

                                            <ul>

                                                <?php if ( is_active_sidebar('second_sidebar') ) : ?>

                                                    <?php dynamic_sidebar('second_sidebar'); ?>

                                                <?php endif; ?>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!--Column-->

                        <div class="column col-xl-3 col-lg-6 col-md-6 col-sm-12">

                            <div class="footer-widget info-widget">

                                <div class="widget-content">

                                    <h6><?php _e('Contact Us','mcg'); ?></h6>

                                    <ul class="contact-info">

                                        <?php 

                                        $location    = get_option('mcg_location');

                                        $location_ar = get_option('mcg_location_ar'); 

                                        switch ( ICL_LANGUAGE_CODE ){

                                            case 'en':

                                                $location_text = $location;

                                                break;

                                            case 'ar':

                                                $location_text = $location_ar;

                                                break;

                                            default:

                                                $location_text = '';

                                        }

                                            if(!empty($location_text)) :

                                        ?>

                                        <li class="address"><span class="icon flaticon-pin-1"></span> 

                                            <?= $location_text ?>

                                        </li>

                                        <?php endif; ?>

                                        <?php $phone = get_option('mcg_phone');  

                                            if(!empty($phone)) :

                                        ?>

                                        <li>

                                            <span class="icon flaticon-call"></span><a href="tel:<?= $phone ?>"><?= $phone ?></a></li>

                                        <?php endif; ?>

                                        <?php $email = get_option('mcg_email');  

                                            if(!empty($email)) :

                                        ?>

                                        <li>

                                            <span class="icon flaticon-email-2"></span><a

                                                href="mailto:<?=$email; ?>"><?=$email; ?></a>

                                        </li>

                                        <?php endif; ?>

                                    </ul>

                                    <ul class="social-links clearfix">

                                        <?php $facebook = get_option('mcg_fb');  

                                            if(!empty($facebook)) :

                                        ?>

                                        <li><a href="<?=$facebook; ?>"><span class="fab fa-facebook-f"></span></a></li>

                                        <?php endif; ?>

                                        <?php $instagram = get_option('mcg_insta');  

                                            if(!empty($instagram)) :

                                        ?>

                                        <li><a href="<?=$instagram; ?>"><span class="fab fa-instagram"></span></a></li>

                                        <?php endif; ?>

                                        <?php $linkedin = get_option('mcg_linkedin');  

                                            if(!empty($linkedin)) :

                                        ?>

                                        <li><a href="<?=$linkedin; ?>"><span class="fab fa-linkedin-in"></span></a></li>

                                        <?php endif; ?>

                                        <?php $twitter = get_option('mcg_twitter');  

                                            if(!empty($twitter)) :

                                        ?>

                                        <li><a href="<?=$twitter; ?>"><span class="fab fa-twitter"></span></a></li>

                                        <?php endif; ?>

                                        <?php $whatsapp = get_option('mcg_whatsapp');  

                                            if(!empty($whatsapp)) :

                                        ?>

                                        <li><a href="https://api.whatsapp.com/send/?phone=<?= $whatsapp; ?>&text&app_absent=0" target="_blank"><span class="fab fa-whatsapp"></span></a></li>

                                        <?php endif; ?>

                                    </ul>

                                </div>



                            </div>

                        </div>

                    </div>



                </div>

            </div>



            <!-- Footer Bottom -->

            <div class="footer-bottom">

                <div class="auto-container">

                    <div class="inner clearfix">

                        <div class="copyright"><?php _e('Misr Castle Group &copy; copyright','mcg'); ?> <?= date("Y"); ?></div>

                    </div>

                </div>

            </div>



        </footer>



    </div>

    <!--End pagewrapper-->



    <a href="#" data-target="html" class="scroll-to-target scroll-to-top">

        <span>

            <img src="<?=mcg_URL ?>assets/images/icons/car1.png" alt="">

        </span>

    </a>

<?php wp_footer(); ?>

<script type="text/javascript">

    $(".ui-selectmenu-text").text("<?php _e('Choose Position','mcg'); ?>");

</script>

</body>

</html>