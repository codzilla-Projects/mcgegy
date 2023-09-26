<?php  

	/**

	** Template Name: Careers Template

	**/

get_header();

get_template_part('page_title'); 

?>

<section class="get-quote-section">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Left Column-->

            <!--Right Column-->

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="inner">

                    <div class="form-box wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">

                    	<div class="default-tabs tabs-box">

                        <!--Tab Btns-->

                        <ul class="tab-btns tab-buttons clearfix">

                    	<?php

                    		$first_flag = true;

                    		$number = 1;

                            $careers = mcg_get_careers(-1);

                            if($careers->have_posts()) : 

                            while($careers->have_posts()) : $careers->the_post();

                        ?>

                            <li data-tab="#tab-<?= $number; ?>" class="tab-btn <?php echo $first_flag ? 'active-btn' : '' ?>"><span><?php the_title(); ?></span></li>

                           <?php $number++; $first_flag = false; endwhile; wp_reset_query(); endif ?>

                        </ul>

                        <!--Tabs Container-->

                        <div class="tabs-content">

                        	<?php

                        	$first_flag = true;

                        	$number = 1;

                            $careers = mcg_get_careers(-1);

                            if($careers->have_posts()) :

                        	while($careers->have_posts()) : $careers->the_post();

                        	$mcg_careers    = get_post_meta( get_the_ID(), 'mcg_careers', true );

							$mcg_careers_ar = get_post_meta( get_the_ID(), 'mcg_careers_ar', true );

			                    switch ( ICL_LANGUAGE_CODE ){

			                        case 'en':

			                            $careers_text = $mcg_careers;

			                            break;

			                        case 'ar':

			                            $careers_text = $mcg_careers_ar;

			                            break;

			                        default:

			                            $careers_text = '';

			                    }  

                        	?>

                            <div class="tab <?php echo $first_flag ? 'active-tab' : '' ?>" id="tab-<?= $number; ?>">

                                <div class="content">

                                    <div class="default-form">

			                            <h4><?php the_content(); ?><span>.</span></h4>

			                            <?= do_shortcode(''.$careers_text.''); ?>

			                        </div>

                                </div>

                            </div>
                            
                            
                            <?php $number++; $first_flag = false; endwhile; wp_reset_query(); ?>
                            <?php else: ?>
                                <h4><?php _e('No careers avilable right now','mcg'); ?><span>!</span></h4>
                            <?php endif ?>

                        </div>

                    </div>

                        

                    </div>

                </div>

            </div>



        </div>

    </div>

</section> 

<!-- Main F

<?php get_footer(); ?>