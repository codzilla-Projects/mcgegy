<?php  
	/**
	** Template Name: News Template
	**/
get_header();
get_template_part('page_title'); 
?>
<!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2><?=$news_title; ?><span class="dot">.</span></h2>
                </div>

                <div class="row clearfix">
                    <!--News Block-->
                    <?php
                        $news = mcg_get_news(9);
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
                    <?php endwhile; ?>
                </div>
                <div class="text-center load-more-products mt-4">
                    <nav class="page-pagination">
                        <nav class="page-pagination">
                            <?php    
                                $args = array(
                                   'format'             => '?paged=%#%',
                                   'current'            => max( 1, get_query_var('paged') ),
                                   'total'              => $news->max_num_pages,
                                   'show_all'           => false,
                                   'end_size'           => 1,
                                   'mid_size'           => 2,
                                   'prev_next'          => true,
                                   'next_text'          => '<i class="fa fa-angle-right"></i>',
                                   'prev_text'          => '<i class="fa fa-angle-left"></i>',
                                   'type'               => 'list',
                                  );
                            ?>
                            <?php echo paginate_links($args); ?>          
                    </nav>
                </div>
                <?php  wp_reset_query(); endif ?>
            </div>
        </section>
        <!-- End news Section -->
<?php get_footer(); ?>