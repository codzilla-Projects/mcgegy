<?php 



function main_content_area_callback(){



	$wp_editor_settings = array( 



		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue



		'textarea_rows'=> 2



	);    



	if( isset( $_POST['mcg_save'] ) && !empty( $_POST['mcg_save']) ){



		foreach ($_POST as $key => $value) {



			if(in_array($key,['footer_content','footer_content_ar'])){



				$value = stripcslashes($value);



			}				



			update_option( $key, $value);



		}



	}



?>

	<div class="container-fluid text-left padding-right-4">

	<div class="row">



		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">

			<!-- Top Navigation -->

			<header class="codrops-header">

				<h1 class="text-center mcg-title"><span>General Settings</span></h1>

			</header>

		</div>

			<br/>

		<div class="d-flex align-items-start p-0 m-0">

			<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Logos</button>

				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact</button>

				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Social Media</button>

				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Footer</button>

				<button class="nav-link" id="v-pills-fivthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fivthsection" type="button" role="tab" aria-controls="v-pills-fivthsection" aria-selected="false">Hero Page Title Image</button>


			</div>

			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

				<form class="form-horizontal form_back p-5" method="post" action="#">



				    <div class="tab-content" id="v-pills-tabContent">



				        <div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">



							<div class="form-group">

							  	<label for="mcg_website_logo" class="col-sm-12 text-left  control-label text-white"> Header Logo</label>

							  	<div class="col-sm-12 text-left ">

							    	<input class="header_img_url mcg_half" type="text" name="mcg_logo_img" size="60" value="<?php echo get_option('mcg_logo_img'); ?>">

							    	<a href="#" class="header_img_upload btn btn-info">Choose</a>

							    	<img class="header_img" src="<?php echo get_option('mcg_logo_img'); ?>" height="100" style="max-width:100%" />

							  	</div>

							</div>



							<div class="form-group">

							  	<label for="mcg_footer_logo" class="col-sm-12 text-left  control-label text-white"> Footer Logo</label>

							  	<div class="col-sm-12 text-left ">

							    	<input class="footer_img_url mcg_half" type="text" name="mcg_footer_logo_img" size="60" value="<?php echo get_option('mcg_footer_logo_img'); ?>">

							    	<a href="#" class="footer_img_upload btn btn-info">Choose</a>

							    	<img class="footer_img" src="<?php echo get_option('mcg_footer_logo_img'); ?>" height="100" style="max-width:100%" />

							  	</div>

							</div>



							<div class="form-group">

							  	<label for="mcg_favicon" class="col-sm-12 text-left  control-label text-white"> Favicon </label>

							  	<div class="col-sm-12 text-left ">

							    	<input class="favicon_img_url mcg_half" type="text" name="mcg_favicon" size="60" value="<?php echo get_option('mcg_favicon'); ?>">

							    	<a href="#" class="favicon_img_upload btn btn-info">Choose</a>

							    	<img class="favicon_img" src="<?php echo get_option('mcg_favicon'); ?>" height="100" style="max-width:100%" />

							  	</div>

							</div>

				        </div>



				        <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">



							<div class="form-group">

								<label for="mcg_phone" class="col-sm-12 text-left  control-label text-white">Phone Number</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control" id="mcg_phone" name="mcg_phone" value="<?php echo get_option('mcg_phone'); ?>">

								</div>

							</div>	



							<div class="form-group">

								<label for="mcg_email" class="col-sm-12 text-left  control-label text-white">Email Address</label>

								<div class="col-sm-12 text-left ">

									<input type="email" class="form-control text-left" id="mcg_email" name="mcg_email" value="<?php echo get_option('mcg_email'); ?>">

								</div>

							</div>

							<?php if(ICL_LANGUAGE_CODE == 'ar'): ?>

							<div class="form-group">

								<label for="mcg_location_ar" class="col-sm-12 text-right  control-label text-white">العنوان</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control text-left" id="mcg_location_ar" name="mcg_location_ar" value="<?php echo get_option('mcg_location_ar'); ?>">

								</div>

							</div>

							<?php else:?>

							<div class="form-group">

								<label for="mcg_location" class="col-sm-12 text-left  control-label text-white">Location</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control text-left" id="mcg_location" name="mcg_location" value="<?php echo get_option('mcg_location'); ?>">

								</div>

							</div>

							<?php endif; ?>

							



							<div class="form-group">

								<label for="mcg_map" class="col-sm-12 text-left  control-label text-white">Maps Link</label>

								<div class="col-sm-12 text-left ">

									<input type="text" class="form-control text-left" id="mcg_map" name="mcg_map" value="<?php echo get_option('mcg_map'); ?>">

								</div>

							</div>



					    </div>	      



						<div class="tab-pane fade" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">



							<div class="form-group">



								<label for="mcg_fb" class="col-sm-12 text-left  control-label text-white">Facebook</label>



								<div class="col-sm-12 text-left ">



									<input type="text" class="form-control" id="mcg_fb" name="mcg_fb" value="<?php echo get_option('mcg_fb'); ?>">



								</div>



							</div>



							<div class="form-group">



								<label for="mcg_twitter" class="col-sm-12 text-left  control-label text-white">Twitter</label>



								<div class="col-sm-12 text-left ">



									<input type="text" class="form-control" id="mcg_twitter" name="mcg_twitter" value="<?php echo get_option('mcg_twitter'); ?>">



								</div>



							</div>



							<div class="form-group">



								<label for="mcg_youtube" class="col-sm-12 text-left  control-label text-white">Youtube</label>



								<div class="col-sm-12 text-left ">



									<input type="text" class="form-control" id="mcg_youtube" name="mcg_youtube" value="<?php echo get_option('mcg_youtube'); ?>">



								</div>



							</div>



							<div class="form-group">



								<label for="mcg_insta" class="col-sm-12 text-left  control-label text-white">Instagram</label>



								<div class="col-sm-12 text-left ">



									<input type="text" class="form-control" id="mcg_insta" name="mcg_insta" value="<?php echo get_option('mcg_insta'); ?>">



								</div>



							</div>



							<div class="form-group">



								<label for="mcg_linkedin" class="col-sm-12 text-left  control-label text-white">Linkedin</label>



								<div class="col-sm-12 text-left ">



									<input type="text" class="form-control" id="mcg_linkedin" name="mcg_linkedin" value="<?php echo get_option('mcg_linkedin'); ?>">



								</div>



							</div>



							<div class="form-group">



								<label for="mcg_whatsapp" class="col-sm-12 text-left  control-label text-white">WhatsApp</label>



								<div class="col-sm-12 text-left ">



									<input type="text" class="form-control" id="mcg_whatsapp" name="mcg_whatsapp" value="<?php echo get_option('mcg_whatsapp'); ?>">



								</div>



							</div>



						</div>



						<div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">



							<div class="form-group">

							    <label for="mcg_website_logo_footer" class="col-sm-12 text-left  control-label text-white"> Footer Logo</label>

							    <div class="col-sm-12 text-left ">

							  	    <input class="footer_img_url mcg_half" type="text" name="mcg_logo_footer_img" size="60" value="<?php echo get_option('mcg_logo_footer_img'); ?>">

							    <a href="#" class="footer_img_upload btn btn-info">Choose</a>

							    <img class="footer_img" src="<?php echo get_option('mcg_logo_footer_img'); ?>" height="100" style="max-width:100%" />

							  </div>

							</div>

							<?php if(ICL_LANGUAGE_CODE == 'ar'): ?>

							<div class="form-group text-right">

								<label for="footer_content_ar" class="col-sm-6 control-label text-white">محتوى الفوتر </label>

								<div class="col-sm-12">

	                				<?php wp_editor( get_option('footer_content_ar'), 'footer_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content_ar','class'=>'form-control',) );  ?>

								</div>

							</div>

						    <?php else:?>

						    	<div class="form-group text-left">

								<label for="footer_content" class="col-sm-6 control-label text-white">Footer Content</label>

								<div class="col-sm-12">

	                				<?php wp_editor( get_option('footer_content'), 'footer_content',  array('textarea_rows'=>5,'textarea_name'=> 'footer_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'footer_content','class'=>'form-control',) );  ?>

								</div>

							</div>

						    <?php endif; ?>

							

				        </div>

				        <div class="tab-pane fade show" id="v-pills-fivthsection" role="tabpanel" aria-labelledby="v-pills-fivthsection-tab">



							<div class="form-group">

							    <label for="mcg_website_page_title" class="col-sm-12 text-left  control-label text-white"> Page Tilte Image</label>

							    <div class="col-sm-12 text-left ">

							  	    <input class="page_title_img_url mcg_half" type="text" name="mcg_page_title_img" size="60" value="<?php echo get_option('mcg_page_title_img'); ?>">

							    <a href="#" class="page_title_img_upload btn btn-info">Choose</a>

							    <img class="page_title_img" src="<?php echo get_option('mcg_page_title_img'); ?>" height="100" style="max-width:100%" />

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

<?php



}