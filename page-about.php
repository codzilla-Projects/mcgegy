<?php  

	/**

	** Template Name: About Us Template

	**/

get_header();

get_template_part('page_title'); 

?>

<?php if ($about_page_hidden != '1')  :?>

<!-- Start About Company -->

<section class="featured-section featured-section__about-two">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Left Column-->

            <div class="left-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"

                    style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">

                    <div class="image-box"><img src="<?= $about_page_img ?>" alt=""></div>

                </div>

            </div>

            <!--Right Column-->

            <div class="right-col col-lg-6 col-md-12 col-sm-12">

                <div class="inner">

                    <div class="sec-title">

                        <h2><?=$about_page_title; ?><span class="dot">.</span></h2>

                        <div class="lower-text">

                            <?= $about_page_content; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- End About Company -->

<?php endif; ?>

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

<?php if ($about_affiliate_hidden != '1')  :?>

    <section class="portfolio-masonary">

        <div class="auto-container">

            <div class="upper-row clearfix">

                <div class="sec-title text-center">

                    <h2><?=$about_affiliate_title; ?><span class="dot">.</span></h2>

                </div>

            </div>



            <div class="row filter-layout dynamic-filter-count-layout masonary-layout">

                <?php

                    $no = $about_affiliate_number;

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

<?php endif ?>

<?php if ($information_hidden != '1')  :?>

    <!-- Parallax Section -->

    <section class="parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">

        <!-- <div class="image-layer" style="background-image: url(images/background/image-2.jpg);"></div> -->

        <img src="<?=$information_img ?>" alt="" class="jarallax-img">

        <div class="auto-container">

            <div class="content-box">

                <div class="icon-box"><img src="<?=$information_second_img ?>" alt="" class="logo-img"></div>

                <h2><?=$information_title ?>. <span><?=$information_second_title ?>.</span></h2>

            </div>

        </div>

    </section>

<?php endif; ?>

<?php get_footer(); ?>