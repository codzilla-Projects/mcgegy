<?php  
	/**
	** Template Name: Services Center Template
	**/
	get_header();
	get_template_part('page_title'); 
?>
<?php if ($services_page_hidden != '1')  :?>
<!--Featured Section-->
<section class="featured-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="image-box"><img src="<?= $services_page_img; ?>" alt=""></div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-col col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title">
                        <h2><?= $services_page_title; ?><span class="dot">.</span></h2>
                        <div class="lower-text">
                         	<?= $services_page_content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if ($services_section_hidden != '1')  :?>
<!--Why Us Section-->
<section class="service-center-services why-us-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Right Column-->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="sec-title centered">
                        <h2 class="text-white"><?= $services_section_title; ?> <span class="dot">.</span></h2>
                    </div>
                    <div class="features row">
                    	<?php
	                        $no = $services_section_number;
	                        $service_center = mcg_get_service_center($no);
	                        if($service_center->have_posts()) : 
	                        while($service_center->have_posts()) : $service_center->the_post(); 
	                    ?>
                        <div class="feature col-lg-<?php if ( ICL_LANGUAGE_CODE=='en' ) {echo"4";}else{echo"6";}?> col-md-6 col-sm-12">
                            <div class="inner-box">
                                <h6><?php the_title(); ?></h6>
                            </div>
                        </div>
                    	<?php endwhile; wp_reset_query(); endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if ($brands_section_hidden != '1')  :?>
<!--Sponsors Section-->
<section class="sponsors-section brands-center">
	<div class="auto-container">
        <div class="sec-title centered">
            <h2><?= $brands_section_title; ?><span class="dot">.</span></h2>
        </div>
    </div>
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="row">
            	<?php
                    $no = $brands_section_number;
                    $brands_service = mcg_get_brands_service_center($no);
                    if($brands_service->have_posts()) : 
                    while($brands_service->have_posts()) : $brands_service->the_post(); 
                ?>
                <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                    <figure class="image-box"><a href="javascript:void(0)"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a></figure>
                </div>
                <?php endwhile; wp_reset_query(); endif ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if ($brands_section_hidden != '1')  :?>
<!--Sponsors Section-->
<section class="sponsors-section equipment">
	<div class="auto-container">
        <div class="sec-title centered">
            <h2><?= $equipment_section_title; ?><span class="dot">.</span></h2>
        </div>
        <div>
            <div class="lower-text text-center">
            	<?= $equipment_section_content; ?>
            </div>
        </div>
    </div>
    <div class="sponsors-outer">
        <!--Sponsors-->
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="row">
            	<?php
                    $no = $equipment_section_number;
                    $equipment = mcg_get_equipment($no);
                    if($equipment->have_posts()) : 
                    while($equipment->have_posts()) : $equipment->the_post(); 
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <figure class="image-box"><a href="javascript:void(0)"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>
                    	<h5><?php the_title(); ?></h5>
                    </figure>
                </div>
                <?php endwhile; wp_reset_query(); endif ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>