<?php get_header(); ?>



    <?php if (get_option('slider_hidden') != '1')  :?>

        <!-- Banner Section -->

        <section class="banner-section banner-one">



            <div class="left-based-text">

                <div class="base-inner">

                    

                    <div class="social-links">

                        <ul class="clearfix">

                            <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms"> 

								<?php $facebook = get_option('mcg_fb');  

	                           	if(!empty($facebook)) :

	                           	?>

	                           	<a href="<?= $facebook; ?>"><span>Facebook</span></a>

	                           	<?php endif; ?>

	                       </li>

							<li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">

	                          	<?php $instagram = get_option('mcg_insta');  

	                           	if(!empty($instagram)) :

	                           	?>

	                           	<a href="<?= $instagram; ?>"><span>Instagram</span></a>

	                           	<?php endif; ?>

	                        </li>

							<li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">

	                           	<?php $linkedin = get_option('mcg_linkedin');  

	                           	if(!empty($linkedin)) :

	                           	?>

	                           	<a href="<?= $linkedin; ?>"><span>Linkedin</span></a>

	                           	<?php endif; ?>

	                        </li>

                        </ul>

                    </div>

                </div>

            </div>



            <div dir="ltr" class="banner-carousel owl-theme owl-carousel">

            	<?php

	            	$no = $slider_number;

	                $sliders = mcg_get_slider($no);

	                if($sliders->have_posts()) : 

	                while($sliders->have_posts()) : $sliders->the_post(); 

	                $slider_url     = get_post_meta(get_the_ID(),'mcg_slider_link_url',true);

                    $slider_text    = get_post_meta(get_the_ID(),'mcg_slider_link_text',true);

                    $slider_url_ar  = get_post_meta(get_the_ID(),'mcg_slider_link_url_ar',true);

                    $slider_text_ar = get_post_meta(get_the_ID(),'mcg_slider_link_text_ar',true);

                    switch ( ICL_LANGUAGE_CODE ){

                        case 'en':

                            $output_text = $slider_text;

                            $output_url  = $slider_url;

                            break;

                        case 'ar':

                            $output_text = $slider_text_ar;

                            $output_url  = $slider_url_ar;

                            break;

                        default:

                            $output_text = '';

                            $output_url  = '';

                    }

	            ?>

                <!-- Slide Item -->

                <div class="slide-item">

                    <div class="image-layer" style="background-image: url(<?php the_post_thumbnail_url() ?>);"></div>

                    <div class="left-top-line"></div>

                    <div class="right-bottom-curve"></div>

                    <div class="right-top-curve"></div>

                    <div class="auto-container">

                        <div class="content-box">

                            <div class="content">

                                <div class="inner">

                                    <div class="sub-title"><?php the_title(); ?></div>

                                    <h1><?php the_content(); ?></h1>

                                    <?php

			                        	if(!empty($output_text)||($output_url)):

			                        ?>

                                    <div class="link-box">

                                        <a class="theme-btn btn-style-one" href="<?=$output_url; ?>">

                                            <i class="btn-curve"></i>

                                            <span class="btn-title"><?=$output_text; ?></span>

                                        </a>

                                    </div>

                                	<?php endif ?>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <?php endwhile; wp_reset_query(); endif ?>	

            </div>

        </section>

        <!--End Banner Section -->

    <?php endif; ?>

    <?php if (get_option('about_hidden') != '1')  :?>

        <!--About Section-->

        <section class="about-section">

            <div class="auto-container">

                <div class="row clearfix">

                    <!--Image Column-->

                    <div class="image-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="image-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">

                                <img src="<?=$about_img; ?>" alt="">

                            </div>

                            <div class="image-block wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">

                                <img src="<?=$about_small_img ?>" alt="">

                            </div>

                        </div>

                    </div>

                    <!--Text Column-->

                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title">

                                <h2><?=$about_title; ?><span class="dot">.</span></h2>

                                <div class="lower-text">

                                    <?=$about_small_title; ?>

                                </div>

                            </div>

                            <div class="text">

                                <p>

                                    <?=$about_content; ?>

                                </p>

                            </div>
                            <?php

                                if(!empty($about_link_url)||($about_link_text)):

                            ?>
                            <div class="link-box">

                                <a class="theme-btn btn-style-one" href="<?=$about_link_url; ?>">

                                    <i class="btn-curve"></i>

                                    <span class="btn-title"><?=$about_link_text; ?></span>

                                </a>

                            </div>
                        <?php endif; ?>
                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- End About Section -->

    <?php endif; ?>

    <?php if (get_option('services_hidden') != '1')  :?>

        <!--Services Section-->

        <section class="services-section">

            <div class="auto-container">

                <div class="row clearfix">

                    <!--Title Block-->

                    <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">

                        <div class="inner">

                            <div class="sec-title">

                                <h2><?=$services_title; ?><span class="dot">.</span></h2>

                                <div class="lower-text">

                                    <?=$services_content; ?>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php

                        $number = 1;

                        $no = $services_number;

                        $services = mcg_get_services($no);

                        if($services->have_posts()) : 

                        while($services->have_posts()) : $services->the_post(); 

                        $service_icon  = get_post_meta(get_the_ID(),'mcg_services_icon',true);

                    ?>

                    <!--Service Block-->

                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"

                        data-wow-duration="1500ms">

                        <div class="inner-box">

                            <strong>

                                <?php if ($number < 10) {

                                        echo "0";

                                    } ?>

                                <?= $number;?>

                            </strong>

                            <div class="bottom-curve">

                                

                            </div>

                            <div class="icon-box"><span class="<?=$service_icon; ?>"></span></div>

                            <h6><?php the_title(); ?></h6>

                        </div>

                    </div>

                    <?php $number++; endwhile; wp_reset_query(); endif ?>

                </div>

            </div>

        </section>

        <!-- End Services Section -->

    <?php endif; ?>

    <?php if (get_option('brands_hidden') != '1')  :?>

        <!-- Gallery Section -->

        <section class="gallery-section">

            <div class="container-fluid">

                <!--MixitUp Galery-->

                <div class="mixitup-gallery">

                    <div class="upper-row clearfix">

                        <div class="sec-title">

                            <h2><?=$brands_title; ?><span class="dot">.</span></h2>

                        </div>

                        <!--Filter-->

                    </div>

                     <!--Default Tabs-->

                    <div class="work-tabs tabs-box">

                        <!--Tab Btns-->

                        <ul class="tab-btns tab-buttons clearfix">

                            <?php

                                $first_flag = true;

                                $categories = get_terms( array(

                                    'taxonomy'   => 'brands_cat',

                                    'hide_empty' => false

                                ) );


                            foreach ( $categories as $key => $cat ) {?>
                            <?php if ($cat->count != 0) :?>
                            <li data-tab="#tab-<?=$cat->term_id; ?>" class="tab-btn <?= $first_flag ? 'active-btn' : '' ?>"><span><?= $cat->name; ?></span></li>
                            <?php endif ?>

                            <?php $first_flag = false; ?>

                            <?php } ?>

                        </ul>



                        <!--Tabs Container-->

                        <div class="tabs-content">

                            <?php 

                             $first_flag = true;

                             foreach ( $categories as $key => $cat ) { 

                                $term_link = get_term_link( $cat );

                                $term_name = $cat->name;

                                $args = array(

                                    'post_type'      => 'brands',

                                    'posts_per_page' => 8,

                                    'brands_cat'     => $cat->slug,

                                    'hide_empty'     => 1,

                                    'orderby'        => 'name',

                                    'order'          => 'ASC'

                                );

                            ?>

                            <!--Tab-->

                            <div class="tab <?php echo $first_flag ? 'active-tab' : '' ?>" id="tab-<?=$cat->term_id; ?>">

                                <div class="content">

                                    <div class="gallery-carousel owl-theme owl-carousel ">

                                        <!-- Gallery Item -->

                                        <?php

                                            $no = $brands_number;

                                            $brands = mcg_get_brands($no,$term_name);

                                            if($brands->have_posts()) : 

                                            while($brands->have_posts()) : $brands->the_post(); 
                                            $mcg_brand     = get_post_meta(get_the_ID(),'mcg_brands',true);
                                            $mcg_brand_ar    = get_post_meta(get_the_ID(),'mcg_brands_ar',true);

                                                switch ( ICL_LANGUAGE_CODE ){

                                                    case 'en':

                                                        $output_brand = $mcg_brand;

                                                        break;

                                                    case 'ar':

                                                        $output_brand = $mcg_brand_ar;
                                                        break;

                                                    default:

                                                        $output_brand = '';

                                                }


                                        ?>

                                        <div class="gallery-item gallery-item-home">

                                            <div class="inner-box">

                                                <figure class="image"><img src="<?php the_post_thumbnail_url() ?>" alt=""></figure>

                                                <a href="<?php the_post_thumbnail_url() ?>" class="lightbox-image overlay-box"

                                                    data-fancybox="gallery"></a>

                                                <div class="cap-box">

                                                    <div class="cap-inner">

                                                        <div class="title">

                                                            <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                                            <?php the_content(); ?>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                    <?php $first_flag = false; endwhile; wp_reset_query(); endif ?>

                                        

                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col-md-12 mt-3 justify-content-center text-center">

                                        <div class="link-box">

                                            <a class="theme-btn btn-style-one" href="<?= esc_url($term_link);?>">

                                                <i class="btn-curve"></i>

                                                <span class="btn-title"><?php _e('More','mcg'); ?>

                                                <?=$term_name ?> <?php _e('Brands','mcg'); ?></span>

                                            </a>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <?php } ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- End Gallery Section -->

    <?php endif; ?>

    

        <!-- Call To Section -->

        <!-- <section class="call-to-section-two">

            <div class="auto-container">

                <div class="inner clearfix">

                    <div class="row">

                        <div class="col-md-9">

                            <h2>MCG is a limited company with 75 employees and 19 million Euro of total sales volume .</h2>

                        </div>

                        <div class="col-md-3">

                            <div class="link-box">

                                <a class="theme-btn btn-style-one" href="about.html">

                                    <i class="btn-curve"></i>

                                    <span class="btn-title">Contact with us</span>

                                </a>

                            </div>

                        </div>

                    </div> 

                </div>

            </div>

        </section> -->

        <!-- End Call To Section -->
    <?php if (get_option('ceo_hidden') != '1')  :?>
    <section class="parallax-section jarallax ceo" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">

        <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->

        <div class="auto-container">

            <div class="content-box">

                <div class="icon-box"><img src="<?=$ceo_img ?>" alt="" class="logo-img"></div>

               <div class="inner">

                <div class="sec-title">

                    <h2><?=$about_ceo_title; ?><span class="dot">.</span></h2>
                    <div class="lower-text">
                        <i class="fas fa-user-tie"></i> <?=$about_ceo_small_title; ?>
                    </div>
                </div>

                <div class="text">

                    <p>

                        <?=$about_ceo_content; ?>

                    </p>

                </div>
            </div>

            </div>

        </div>

    </section>
    <?php endif; ?>
    
    <?php if (get_option('affiliate_hidden') != '1')  :?>

        <section class="portfolio-masonary">

            <div class="auto-container">

                <div class="upper-row clearfix">

                    <div class="sec-title text-center">

                        <h2><?=$affiliate_title; ?><span class="dot">.</span></h2>

                    </div>

                </div>



                <div class="row filter-layout dynamic-filter-count-layout masonary-layout">

                    <?php

                        $no = $affiliate_number;

                        $affiliate = mcg_get_affiliate($no);

                        if($affiliate->have_posts()) : 

                        while($affiliate->have_posts()) : $affiliate->the_post(); 

                    ?>

                    <div class="col-xl-4 col-lg-4 col-md-12 filter-item masonary-item branding ">

                        <div class="portfolio-masonary__box">

                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">

                            <div class="portfolio-masonary__box-content">

                                <h4><?php the_title(); ?></h4>

                            </div>

                        </div>

                    </div>

                <?php endwhile; wp_reset_query(); endif ?>

                </div>

            </div>

        </section>

    <?php endif; ?>

    <?php if (get_option('news_hidden') != '1')  :?>

        <!-- News Section -->

        <section class="news-section">

            <div class="auto-container">

                <div class="sec-title centered">

                    <h2><?=$news_title; ?><span class="dot">.</span></h2>

                </div>



                <div class="row clearfix">

                    <!--News Block-->

                    <?php

                        $no = $news_number;

                        $news = mcg_get_news($no);

                        if($news->have_posts()) : 

                        while($news->have_posts()) : $news->the_post(); 

                    ?>

                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"

                        data-wow-duration="1500ms">

                        <div class="inner-box">

                            <div class="image-box">

                                <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></a>

                            </div>

                            <div class="lower-box">

                                <div class="post-meta">

                                    <ul class="clearfix">

                                        <li><span class="far fa-clock"></span> <?php the_time('j') ?> <?php the_time('M') ?></li>

                                        <li><span class="far fa-user-circle"></span> <?php the_author(); ?></li>

                                    </ul>

                                </div>

                                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

                                <div class="text"><?php the_excerpt(); ?></div>

                                <div class="link-box"><a class="theme-btn" href="<?php the_permalink(); ?>"><span class="flaticon-next-1"></span></a></div>

                            </div>

                        </div>

                    </div>

                    <?php endwhile; wp_reset_query(); endif ?>

                </div>

            </div>

        </section>

        <!-- End news Section -->

    <?php endif; ?>

    <?php if (get_option('contact_hidden') != '1')  :?>

        <!-- Contact Us Section -->

        <section class="call-to-section">

            <div class="auto-container">

                <div class="inner clearfix">

                    <div class="shape-1 wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms"></div>

                    <div class="shape-2 wow fadeInDown" data-wow-delay="0ms" data-wow-duration="1500ms"></div>

                    <h2><?=$contact_title; ?></h2>

                    <div class="link-box">

                        <a class="theme-btn btn-style-two" href="<?=$contact_link_url; ?>">

                            <i class="btn-curve"></i>

                            <span class="btn-title"><?=$contact_link_text; ?></span>

                        </a>

                    </div>

                </div>

            </div>

        </section>

        <!--End Contact Us Section-->

        <?php endif; ?>

<?php get_footer(); ?>