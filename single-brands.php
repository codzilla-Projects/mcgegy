<?php  

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID(); 

    $post_title = get_the_title();

get_template_part('page_title'); 

?>

<div class="sidebar-page-container">

    <div class="auto-container">

        <div class="row clearfix">

            <!--Content Side-->

            <div class="content-side col-lg-12 col-md-12 col-sm-12 text-center">

                <div class="blog-details">

                    <!--News Block-->

                    <div class="post-details">

                        <div class="inner-box">

                            <div class="lower-box">

                                <h4><?php the_title(); ?></h4>

                                <div class="text">
                                    <div class="brands-desc">
                                        <?php the_content(); ?>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php endwhile; endif;?>

<?php get_footer(); ?>