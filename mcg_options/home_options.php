<?php 



function home_page_area_callback(){



	$wp_editor_settings = array( 



		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



		'textarea_rows'=> 2



	);    



	if( isset( $_POST['mcg_save'] ) && !empty( $_POST['mcg_save']) ){



		foreach ($_POST as $key => $value) {



			if(in_array($key,['about_content','services_content','about_content_ar','services_content_ar','about_ceo_small_title','about_ceo_content','about_ceo_content_ar'])){



				$value = stripcslashes($value);



			}				



			update_option( $key, $value);



		}

		if(!isset($_POST['slider_hidden'])) {delete_option('slider_hidden');}

		if(!isset($_POST['about_hidden'])) {delete_option('about_hidden');}

		if(!isset($_POST['ceo_hidden'])) {delete_option('ceo_hidden');}

		if(!isset($_POST['services_hidden'])) {delete_option('services_hidden');}

		if(!isset($_POST['brands_hidden'])) {delete_option('brands_hidden');}

		if(!isset($_POST['affiliate_hidden'])) {delete_option('affiliate_hidden');}

		if(!isset($_POST['news_hidden'])) {delete_option('news_hidden');}

		if(!isset($_POST['contact_hidden'])) {delete_option('contact_hidden');}



	}



?>

<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>

	<div class="container-fluid text-left padding-right-4">

			<div class="row">



				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">

					<!-- Top Navigation -->

					<header class="codrops-header">

						<h1 class="text-center mcg-title"><span>Home Page Settings</span></h1>

					</header>

				</div>

					<br/>

				<div class="d-flex align-items-start p-0 m-0">

					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Slider</button>

						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">About Company</button>

						<button class="nav-link" id="v-pills-eighthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighthsection" type="button" role="tab" aria-controls="v-pills-eighthsection" aria-selected="false">CEO's Company</button>

						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Services</button>

						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Brands</button>

						<button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">Affiliate</button>

						<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">News</button>

						<button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">Contact Us</button>

						

					</div>

					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

						<form class="form-horizontal form_back p-5" method="post" action="#">



						    <div class="tab-content" id="v-pills-tabContent">



						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">



						        	<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="slider_hidden" name="slider_hidden" value="1" <?php echo get_option('slider_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="slider_hidden" class="text-white">Hidden Section</label>

			                        </div>



			                        <div class="form-group text-left">

									  	<label for="slider_number" class="col-sm-12 control-label text-white">Slider Number</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="slider_number" size="60" value="<?php echo get_option('slider_number'); ?>">

									  </div>

									</div>

								</div>

								<div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">



									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="about_hidden" name="about_hidden" value="1" <?php echo get_option('about_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="about_hidden" class="text-white">Hidden Section</label>

			                        </div>

						        	<div class="form-group">

										<label for="about_title" class="col-sm-12 text-left  control-label text-white">Title</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_title" name="about_title" value="<?php echo get_option('about_title'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_small_title" class="col-sm-12 text-left  control-label text-white">Small Tilte</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_small_title" name="about_small_title" value="<?php echo get_option('about_small_title'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_content" class="col-sm-6 control-label text-white">Content</label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('about_content'), 'about_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_content','class'=>'form-control',) );  ?>

										</div>

									</div>


									<div class="form-group">

										<label for="about_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_link_text" name="about_link_text" value="<?php echo get_option('about_link_text'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_link_url" name="about_link_url" value="<?php echo get_option('about_link_url'); ?>">

										</div>

									</div>

									

									<div class="form-group">

									  	<label for="about_img" class="col-sm-12 text-left  control-label text-white">Big Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="about_img_url mcg_half" type="text" name="about_img" size="60" value="<?php echo get_option('about_img'); ?>">

									    	<a href="#" class="about_img_upload btn btn-info">Choose</a>

									    	<img class="about_img" src="<?php echo get_option('about_img'); ?>" height="100" style="max-width:100%" />

									  	</div>

									</div>

									<div class="form-group">

									  	<label for="about_small_img" class="col-sm-12 text-left  control-label text-white">Small Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="about_small_img_url mcg_half" type="text" name="about_small_img" size="60" value="<?php echo get_option('about_small_img'); ?>">

									    	<a href="#" class="about_small_img_upload btn btn-info">Choose</a>

									    	<img class="about_small_img" src="<?php echo get_option('about_small_img'); ?>" height="100" style="max-width:100%" />

									  	</div>

									</div>

						        </div>      

						        <div class="tab-pane fade" id="v-pills-eighthsection" role="tabpanel" aria-labelledby="v-pills-eighthsection-tab">


						        	<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="ceo_hidden" name="ceo_hidden" value="1" <?php echo get_option('ceo_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="about_hidden" class="text-white">Hidden Section</label>

			                        </div>
						        	<div class="form-group">

									  	<label for="about_ceo_img" class="col-sm-12 text-left  control-label text-white">CEO Image</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="about_ceo_img_url mcg_half" type="text" name="about_ceo_img" size="60" value="<?php echo get_option('about_ceo_img'); ?>">

									    	<a href="#" class="about_ceo_img_upload btn btn-info">Choose</a>

									    	<img class="about_ceo_img" src="<?php echo get_option('about_ceo_img'); ?>" height="100" style="max-width:100%" />

									  	</div>

									</div>
						        	<div class="form-group">

										<label for="about_ceo_title" class="col-sm-12 text-left  control-label text-white">CEO's Name</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_ceo_title" name="about_ceo_title" value="<?php echo get_option('about_ceo_title'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_ceo_small_title" class="col-sm-12 text-left  control-label text-white">Employment status</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_ceo_small_title" name="about_ceo_small_title" value="<?php echo get_option('about_ceo_small_title'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_ceo_content" class="col-sm-6 control-label text-white">CEO's Word</label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('about_ceo_content'), 'about_ceo_content',  array('textarea_rows'=>5,'textarea_name'=> 'about_ceo_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_ceo_content','class'=>'form-control',) );  ?>

										</div>

									</div>
						        </div>

								<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="services_hidden" name="services_hidden" value="1" <?php echo get_option('services_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="services_hidden" class="text-white">Hidden Section</label>

			                        </div>

						        	<div class="form-group">

										<label for="services_title" class="col-sm-12 text-left  control-label text-white">Title</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="services_title" name="services_title" value="<?php echo get_option('services_title'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="services_content" class="col-sm-6 control-label text-white">Content</label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('services_content'), 'services_content',  array('textarea_rows'=>5,'textarea_name'=> 'services_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'services_content','class'=>'form-control',) );  ?>

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="services_number" class="col-sm-12 control-label text-white">Services Number</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="services_number" size="60" value="<?php echo get_option('services_number'); ?>">

									  </div>

									</div>

								</div>



								<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="brands_hidden" name="brands_hidden" value="1" <?php echo get_option('brands_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="brands_hidden" class="text-white">Hidden Section</label>

			                        </div>

						        	<div class="form-group">

										<label for="brands_title" class="col-sm-12 text-left  control-label text-white">Title</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="brands_title" name="brands_title" value="<?php echo get_option('brands_title'); ?>">

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="brands_number" class="col-sm-12 control-label text-white">Brands Number</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="brands_number" size="60" value="<?php echo get_option('brands_number'); ?>">

									  </div>

									</div>

						        </div>



						        <div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="affiliate_hidden" name="affiliate_hidden" value="1" <?php echo get_option('affiliate_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="affiliate_hidden" class="text-white">Hidden Section</label>

			                        </div>

						        	<div class="form-group">

										<label for="affiliate_title" class="col-sm-12 text-left  control-label text-white">Title</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="affiliate_title" name="affiliate_title" value="<?php echo get_option('affiliate_title'); ?>">

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="affiliate_number" class="col-sm-12 control-label text-white">Affiliate Number</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="affiliate_number" size="60" value="<?php echo get_option('affiliate_number'); ?>">

									  </div>

									</div>

						        </div>





						        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="news_hidden" name="news_hidden" value="1" <?php echo get_option('news_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="news_hidden" class="text-white">Hidden Section</label>

			                        </div>

						        	<div class="form-group">

										<label for="news_title" class="col-sm-12 text-left  control-label text-white">Title</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="news_title" name="news_title" value="<?php echo get_option('news_title'); ?>">

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="news_number" class="col-sm-12 control-label text-white">News Number</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="news_number" size="60" value="<?php echo get_option('news_number'); ?>">

									  </div>

									</div>

						        </div>



						        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="contact_hidden" name="contact_hidden" value="1" <?php echo get_option('contact_hidden') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="contact_hidden" class="text-white">Hidden Section</label>

			                        </div>

						        	<div class="form-group">

										<label for="contact_title" class="col-sm-12 text-left  control-label text-white">Title</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="contact_title" name="contact_title" value="<?php echo get_option('contact_title'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="contact_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="contact_link_text" name="contact_link_text" value="<?php echo get_option('contact_link_text'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="contact_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="contact_link_url" name="contact_link_url" value="<?php echo get_option('contact_link_url'); ?>">

										</div>

									</div>

						        </div>



						    </div>



							<div class="form-group">



								<div class="col-sm-12">



								<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 mcg_save_route" name="mcg_save" value="Save Settings">



								</div>



							</div>



						</form>

					</div>

				</div>

			</div>



		</div><!-- /container -->

<?php else: ?> 

	<div dir="rtl" class="container-fluid text-left padding-right-4">

			<div class="row">



				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">

					<!-- Top Navigation -->

					<header class="codrops-header">

						<h1 class="text-center mcg-title"><span>إعدادات الصفحة الرئيسية </span></h1>

					</header>

				</div>

					<br/>

				<div class="d-flex align-items-start p-0 m-0">

					<div class="nav flex-column nav-pills ms-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الصور المتحركة</button>

						<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">عن الشركة</button>

						<button class="nav-link" id="v-pills-eighthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-eighthsection" type="button" role="tab" aria-controls="v-pills-eighthsection" aria-selected="false">كلمة الرئيس التنفيذى </button>

						<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">الخدمات</button>

						<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">العلامات التجارية</button>

						<button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">الشركات التابعة</button>

						<button class="nav-link" id="v-pills-sixthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-sixthsection" type="button" role="tab" aria-controls="v-pills-sixthsection" aria-selected="false">الاخبار</button>

						<button class="nav-link" id="v-pills-seventhsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-seventhsection" type="button" role="tab" aria-controls="v-pills-seventhsection" aria-selected="false">التواصل</button>

						

					</div>

					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back_ar" id="v-pills-tabContent">

						<form class="form-horizontal form_back_ar p-5" method="post" action="#">



						    <div class="tab-content" id="v-pills-tabContent">



						        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">



						        	<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="slider_hidden_ar" name="slider_hidden_ar" value="1" <?php echo get_option('slider_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="slider_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>



			                        <div class="form-group text-left">

									  	<label for="slider_number_ar" class="col-sm-12 control-label text-white">عدد الصور المتحركة</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="slider_number_ar" size="60" value="<?php echo get_option('slider_number_ar'); ?>">

									  </div>

									</div>

								</div>

								<div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">



									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="about_hidden_ar" name="about_hidden_ar" value="1" <?php echo get_option('about_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="about_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>

						        	<div class="form-group">

										<label for="about_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_title_ar" name="about_title_ar" value="<?php echo get_option('about_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعى </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_small_title_ar" name="about_small_title_ar" value="<?php echo get_option('about_small_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_content_ar" class="col-sm-6 control-label text-white">المقال </label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('about_content_ar'), 'about_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_content_ar','class'=>'form-control',) );  ?>

										</div>

									</div>

									<div class="form-group">

										<label for="about_link_text_ar" class="col-sm-12 text-left  control-label text-white">نص الرابط</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_link_text_ar" name="about_link_text_ar" value="<?php echo get_option('about_link_text_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_link_url_ar" class="col-sm-12 text-left  control-label text-white">عنوان الرابط</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_link_url_ar" name="about_link_url_ar" value="<?php echo get_option('about_link_url_ar'); ?>">

										</div>

									</div>

									

									<div class="form-group">

									  	<label for="about_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة الكبيرة </label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="about_img_ar_url mcg_half" type="text" name="about_img_ar" size="60" value="<?php echo get_option('about_img_ar'); ?>">

									    	<a href="#" class="about_img_ar_upload btn btn-info">اختر</a>

									    	<img class="about_img_ar" src="<?php echo get_option('about_img_ar'); ?>" height="100" style="max-width:100%" />

									  	</div>

									</div>

									<div class="form-group">

									  	<label for="about_small_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة الصغيرة</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="about_small_img_ar_url mcg_half" type="text" name="about_small_img_ar" size="60" value="<?php echo get_option('about_small_img_ar'); ?>">

									    	<a href="#" class="about_small_img_ar_upload btn btn-info">اختر</a>

									    	<img class="about_small_img_ar" src="<?php echo get_option('about_small_img_ar'); ?>" height="100" style="max-width:100%" />

									  	</div>

									</div>

						        </div>      

						        <div class="tab-pane fade" id="v-pills-eighthsection" role="tabpanel" aria-labelledby="v-pills-eighthsection-tab">
						        		<div class="form-group">

									  	<label for="about_ceo_img_ar" class="col-sm-12 text-left  control-label text-white">الصورة الصغيرة</label>

									  	<div class="col-sm-12 text-left ">

									    	<input class="about_ceo_img_ar_url mcg_half" type="text" name="about_ceo_img_ar" size="60" value="<?php echo get_option('about_ceo_img_ar'); ?>">

									    	<a href="#" class="about_ceo_img_ar_upload btn btn-info">اختر</a>

									    	<img class="about_ceo_img_ar" src="<?php echo get_option('about_ceo_img_ar'); ?>" height="100" style="max-width:100%" />

									  	</div>

									</div>
									<div class="form-group">
										<label for="about_ceo_title_ar" class="col-sm-12 text-left  control-label text-white">كلمة الرئيس التنفيذى </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_ceo_title_ar" name="about_ceo_title_ar" value="<?php echo get_option('about_ceo_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group">
										<label for="about_ceo_small_title_ar" class="col-sm-12 text-left  control-label text-white">الوضع الوظيفى </label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="about_ceo_small_title_ar" name="about_ceo_small_title_ar" value="<?php echo get_option('about_ceo_small_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="about_ceo_content_ar" class="col-sm-6 control-label text-white">كلمة الرئيس التنفيذى </label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('about_ceo_content_ar'), 'about_ceo_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'about_ceo_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'about_ceo_content_ar','class'=>'form-control',) );  ?>

										</div>

									</div>

						        </div>

								<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="services_hidden_ar" name="services_hidden_ar" value="1" <?php echo get_option('services_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="services_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>

						        	<div class="form-group">

										<label for="services_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="services_title_ar" name="services_title_ar" value="<?php echo get_option('services_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="services_content_ar" class="col-sm-6 control-label text-white">المقال </label>

										<div class="col-sm-12">

			                				<?php wp_editor( get_option('services_content_ar'), 'services_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'services_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'services_content_ar','class'=>'form-control',) );  ?>

										</div>

									</div>



									<div class="form-group text-left">

									  	<label for="services_number_ar" class="col-sm-12 control-label text-white">عدد الخدمات التى تظهر فى الصفحة الرئيسية</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="services_number_ar" size="60" value="<?php echo get_option('services_number_ar'); ?>">

									  </div>

									</div>



								</div>



								<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="brands_hidden_ar" name="brands_hidden_ar" value="1" <?php echo get_option('brands_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="brands_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>

						        	<div class="form-group">

										<label for="brands_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="brands_title_ar" name="brands_title_ar" value="<?php echo get_option('brands_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="brands_number_ar" class="col-sm-12 control-label text-white">عدد العلامات التجارية التى تظهر فى الصفحة الرئيسية</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="brands_number_ar" size="60" value="<?php echo get_option('brands_number_ar'); ?>">

									  </div>

									</div>

									

						        </div>



						        <div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="affiliate_hidden_ar" name="affiliate_hidden_ar" value="1" <?php echo get_option('affiliate_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="affiliate_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>

						        	<div class="form-group">

										<label for="affiliate_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="affiliate_title_ar" name="affiliate_title_ar" value="<?php echo get_option('affiliate_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="affiliate_number_ar" class="col-sm-12 control-label text-white">عدد الشركات التابعة التى تظهر فى الصفحة الرئيسية</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="affiliate_number_ar" size="60" value="<?php echo get_option('affiliate_number_ar'); ?>">

									  </div>

									</div>

									

						        </div>



						        <div class="tab-pane fade show" id="v-pills-sixthsection" role="tabpanel" aria-labelledby="v-pills-sixthsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="news_hidden_ar" name="news_hidden_ar" value="1" <?php echo get_option('news_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="news_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>

						        	<div class="form-group">

										<label for="news_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="news_title_ar" name="news_title_ar" value="<?php echo get_option('news_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group text-left">

									  	<label for="news_number_ar" class="col-sm-12 control-label text-white">عدد الاخبار التى تظهر فى الصفحة الرئيسية</label>

									  	<div class="col-sm-12">

									    	<input class="atco_half w-100" type="number" name="news_number_ar" size="60" value="<?php echo get_option('news_number_ar'); ?>">

									  </div>

									</div>

						        </div>



						        <div class="tab-pane fade show" id="v-pills-seventhsection" role="tabpanel" aria-labelledby="v-pills-seventhsection-tab">

									<div class="form-group text-left">                  

			                            <div class="inline-block">

			                                <input type="checkbox" id="contact_hidden_ar" name="contact_hidden_ar" value="1" <?php echo get_option('contact_hidden_ar') == '1' ? 'checked' : ''; ?>>

			                            </div>

			                            <label for="contact_hidden_ar" class="text-white">إخفاء السكشن </label>

			                        </div>

						        	<div class="form-group">

										<label for="contact_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="contact_title_ar" name="contact_title_ar" value="<?php echo get_option('contact_title_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="contact_link_text_ar" class="col-sm-12 text-left  control-label text-white">نص الرابط</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="contact_link_text_ar" name="contact_link_text_ar" value="<?php echo get_option('contact_link_text_ar'); ?>">

										</div>

									</div>

									<div class="form-group">

										<label for="contact_link_url_ar" class="col-sm-12 text-left  control-label text-white">عنوان الرابط</label>

										<div class="col-sm-12 text-left ">

											<input type="text" class="form-control" id="contact_link_url_ar" name="contact_link_url_ar" value="<?php echo get_option('contact_link_url_ar'); ?>">

										</div>

									</div>

						        </div>



						    </div>



							<div class="form-group">



								<div class="col-sm-12">



								<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 mcg_save_route" name="mcg_save" value="حفظ الاعدادات ">



								</div>



							</div>



						</form>

					</div>

				</div>

			</div>



		</div><!-- /container -->

		<?php endif; ?> 

<?php



}