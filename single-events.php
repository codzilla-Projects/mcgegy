<?php  

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); $events_id = get_the_ID(); 

    $event_title    = get_the_title();

    $events_content = get_the_content();

    $archive_title  = single_cat_title();

get_template_part('page_title'); 

?>

<section class="events-details">

    <div class="auto-container">

        <div class="row">

            <div class="col-lg-12">

                <div class="events-details__content">

                    <h3 class="events-one__title text-center">

                        <?php the_title(); ?>

                    </h3><!-- /.events-one__title -->

                    <div class="row">

                        <?php if(!empty($events_content)):?>

                        <div class="col-lg-8 events-details__sidebar">

                            <div class="events-details__widget events-details__widget-info">

                                <?= $events_content; ?>

                            </div>

                        </div>

                        <?php endif; ?>

                        <div class="col-lg-<?php if(!empty($events_content)){echo "4";}else{ echo "12";} ?> events-details__sidebar">

                            <?php 

                                $events_time     = get_post_meta(get_the_ID(),'mcg_events_time',true);

                                $events_location = get_post_meta(get_the_ID(),'mcg_events_location',true);

                                $events_time_ar  = get_post_meta(get_the_ID(),'mcg_events_time_ar',true);

                                $events_location_ar = get_post_meta(get_the_ID(),'mcg_events_location_ar',true);

                                switch ( ICL_LANGUAGE_CODE ){
                                    case 'en':
                                        $output_time      = $events_time;
                                        $output_location  = $events_location;
                                        break;
                                    case 'ar':
                                        $output_time      = $events_time_ar;
                                        $output_location  = $events_location_ar;
                                        break;
                                    default:
                                        $output_time      = '';
                                        $output_location  = '';
                                }
                            ?>
                            <div class="events-details__widget events-details__widget-info">
                                <ul class="list-unstyled">
                                    <?php  
                                        if(!empty($output_time)) :
                                    ?>
                                    <li>
                                        <strong><?php _e('Starting Time','mcg'); ?></strong>
                                        <span><?= $output_time; ?></span>
                                    </li>
                                    <?php endif ?>
                                    <?php  
                                        if(!empty($output_location)) :
                                    ?>
                                    <li>
                                        <strong><?php _e('Location','mcg'); ?></strong>
                                        <span><?= $output_location; ?></span>
                                    </li>
                                    <?php endif ?>
                                </ul>
                            </div><!-- /.events-details__widget -->
                        </div>
                    </div>
                </div><!-- /.events-details__content -->
            </div><!-- /.col-lg-8 -->

            

        </div><!-- /.row -->

    </div><!-- /.auto-container -->

</section><!-- /.events-details -->

<?php endwhile; endif;?>

<?php get_footer(); ?>