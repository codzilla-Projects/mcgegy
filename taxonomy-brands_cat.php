<?php 

	get_header(); 

	get_template_part('page_title'); 

?>

<!-- Gallery Section -->

        <section class="gallery-section">

            <div class="auto-container brands-cont">

                <!--MixitUp Galery-->

                <div class="mixitup-gallery">

                    <div class="upper-row clearfix">

                        <div class="sec-title">

                            <h2><?= single_cat_title(); ?><span class="dot">.</span></h2>

                        </div>

                        <!--Filter-->

                    </div>

                    <div class="row">

                    	<?php 

							$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

							$brands = mcg_get_brands_with_tax(20,$term->term_id);

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

                        <!-- Gallery Item -->

                        <div class="gallery-item col-xl-3 col-lg-3 col-md-6 col-sm-12 mb-4">

                            <div class="inner-box">

                                <figure class="image"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></figure>

                                <a href="<?php the_post_thumbnail_url(); ?>" class="lightbox-image overlay-box"

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

                        <!-- Gallery Item -->

                        <?php endwhile;?>

                    </div>

                </div>

                <div class="text-center load-more-products mt-4">

                    <nav class="page-pagination">

				        <?php    

				        	$args = array(

				               'format'             => '?paged=%#%',

	                           'current'            => max( 1, get_query_var('paged') ),

	                           'total'              => $brands->max_num_pages,

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

				<?php wp_reset_query(); endif; ?>

            </div>

        </section>

        <!-- End Gallery Section -->

<?php get_footer(); ?>