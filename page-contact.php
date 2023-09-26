<?php  
	/**
	** Template Name: Contact Us Template
	**/
get_header();
get_template_part('page_title'); 
?>
<!--Contact Section-->
<section class="get-quote-two">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2>
                        	<?php  
	                        	$mcg_contacts_title    = get_option('contact_page_title');
								$mcg_contacts_title_ar = get_option('contact_page_title_ar');
			                    switch ( ICL_LANGUAGE_CODE ){
			                        case 'en':
			                            $contact_title = $mcg_contacts_title;
			                            break;
			                        case 'ar':
			                            $contact_title = $mcg_contacts_title_ar;
			                            break;
			                        default:
			                            $contact_title = '';
			                    } 
                        	?>
                        	<?=$contact_title; ?>
                        	<span class="dot">.</span>
                        </h2>
                    </div>
                    <div class="info">
                        <ul>
                            <li class="address">
                                <span class="icon flaticon-pin-1"></span>
                                <strong><?php _e('Visit Us','mcg');?></strong>
                                <?php  
		                        	$mcg_location    = get_option('mcg_location');
									$mcg_location_ar = get_option('mcg_location_ar');
				                    switch ( ICL_LANGUAGE_CODE ){
				                        case 'en':
				                            $mcg_location_text = $mcg_location;
				                            break;
				                        case 'ar':
				                            $mcg_location_text = $mcg_location_ar;
				                            break;
				                        default:
				                            $mcg_location_text = '';
				                    } 
	                        	?>
                                <?=$mcg_location_text;?>
                            </li>
                            <li>
                                <span class="icon flaticon-email-2"></span>
                                <strong><?php _e('Email address','mcg');?></strong>
                                <a href="mailto:<?= get_option('mcg_email'); ?>"><?= get_option('mcg_email'); ?></a>
                            </li>
                            <li>
                                <span class="icon flaticon-call"></span>
                                <strong><?php _e('Call now','mcg');?></strong>
                                <a href="tel:<?= get_option('mcg_phone');?>"><?= get_option('mcg_phone');?></a>
                            </li>
                        </ul>
                    </div>
                </div>
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
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="form-box">
                        <div class="default-form">
                        	<?php  
	                        	$mcg_contacts    = get_option( 'contact_form_english');
								$mcg_contacts_ar = get_option( 'contact_form_ar');
			                    switch ( ICL_LANGUAGE_CODE ){
			                        case 'en':
			                            $contact_text = $mcg_contact;
			                            $contact_form_title = 'English';
			                            break;
			                        case 'ar':
			                            $contact_text = $mcg_contact_ar;
			                            $contact_form_title = 'Arabic';
			                            break;
			                        default:
			                            $contact_text = '';
			                            $contact_form_title = '';
			                    } 
                        	?>
                           <?= do_shortcode('[contact-form-7 id="'.$contacts_text.'" title="Contact Us form '.$contact_form_title.'"]'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $map = get_option('mcg_map');  
    if(!empty($map)) :
?>
<div class="map-box">
	<iframe class="map-iframe"
		src="<?= $map; ?>"
		style="border:0;" aria-hidden="false" tabindex="0"></iframe>
</div>
<?php endif; ?>

<?php get_footer(); ?>