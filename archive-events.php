<?php  
	/**
	** Template Name: Events Template
	**/
get_header();
get_template_part('page_title'); 
?>
<section class="events-one">
    <div class="auto-container">
        <div class="row">
        <?php
            $events = mcg_get_events(3);
            if($events->have_posts()) : 
            while($events->have_posts()) : $events->the_post(); 
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
            <div class="col-md-6 col-lg-4">
                <div class="events-one__item">
                    <div class="events-one__content">
                        <h3 class="events-one__title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3><!-- /.events-one__title -->
                        <ul class="events-one__meta list-unstyled">
                        	<?php
	                        	if(!empty($output_time)):
	                        ?>
                            <li>
                                <i class="far fa-clock"></i>
                                <?= $output_time; ?>
                            </li>
                        	<?php endif; ?>
                        	<?php
	                        	if(!empty($output_location)):
	                        ?>
                            <li>
                                <i class="far fa-map"></i>
                                <?= $output_location; ?>
                            </li>
                        	<?php endif; ?>
                        </ul><!-- /.events-one__meta list-unstyled -->
                    </div><!-- /.events-one__content -->
                </div><!-- /.events-one__item -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <?php endwhile; ?>	
        </div><!-- /.row -->

        <div class="text-center load-more-products mt-4">
            <nav class="page-pagination">
                <nav class="page-pagination">
			        <?php    
			        	$args = array(
			               'format'             => '?paged=%#%',
	                       'current'            => max( 1, get_query_var('paged') ),
	                       'total'              => $events->max_num_pages,
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
        <?php wp_reset_query(); endif ?>
    </div><!-- /.auto-container -->
</section><!-- /.events-one -->
<?php get_footer(); ?>