<?php 
	function services_page_area_callback(){
	$wp_editor_settings = array( 
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2
	);    
	if( isset( $_POST['mcg_save'] ) && !empty( $_POST['mcg_save']) ){
		foreach ($_POST as $key => $value) {
			if(in_array($key,['services_page_content'])){
				$value = stripcslashes($value);
			}				
			update_option( $key, $value);
		}
	}
?>

<?php if ( ICL_LANGUAGE_CODE=='ar' ) :?>

<div dir="rtl" class="container-fluid text-right padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center mcg-title"><span>إعدادات صفحة  مراكز الخدمة </span></h1>
			</header>
		</div>
		<br/>
		<div class="d-flex align-items-start p-0 m-0">

			<div class="nav flex-column nav-pills ms-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="false">سكشن تعريفى </button>

				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">الخدمات </button>

				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">الماركات </button>

				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">معدتنا </button>

			</div>

			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back_ar" id="v-pills-tabContent">

				<form class="form-horizontal form_back_ar p-5" method="post" action="#">

				    <div class="tab-content" id="v-pills-tabContent">

						<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

							<div class="form-group text-right">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="services_page_hidden_ar" name="services_page_hidden_ar" value="1" <?php echo get_option('services_page_hidden_ar') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="services_page_hidden_ar" class="text-white">إخفاء السكشن</label>
	                        </div>

				        	<div class="form-group">
								<label for="services_page_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="services_page_title_ar" name="services_page_title_ar" value="<?php echo get_option('services_page_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="services_page_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('services_page_content_ar'), 'services_page_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'services_page_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'services_page_content_ar','class'=>'form-control',) );  ?>
								</div>
							</div>

							<div class="form-group">
							  	<label for="services_page_img_ar" class="col-sm-12 text-right  control-label text-white">الصورة</label>
							  	<div class="col-sm-12 text-right ">
							    	<input class="services_page_img_ar_url mcg_half" type="text" name="services_page_img_ar" size="60" value="<?php echo get_option('services_page_img_ar'); ?>">
							    	<a href="#" class="services_page_img_ar_upload btn btn-info">اختر</a>
							    	<img class="services_page_img_ar" src="<?php echo get_option('services_page_img_ar'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
				        </div>      

						<div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
							<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="services_section_hidden_ar" name="services_section_hidden_ar" value="1" <?php echo get_option('services_section_hidden_ar') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="services_section_hidden_ar" class="text-white">إخفاء السكشن </label>
	                        </div>

				        	<div class="form-group">
								<label for="services_section_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسيى</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="services_section_title_ar" name="services_section_title_ar" value="<?php echo get_option('services_section_title_ar'); ?>">
								</div>
							</div>

							<div class="form-group text-left">
							  	<label for="services_section_number_ar" class="col-sm-12 control-label text-white">عدد الخدمات الى تظهر فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="atco_half w-100" type="number" name="services_section_number_ar" size="60" value="<?php echo get_option('services_section_number_ar'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

							<div class="form-group text-right">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="brands_section_hidden" name="brands_section_hidden" value="1" <?php echo get_option('brands_section_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="brands_section_hidden" class="text-white">إخفاء السكشن </label>
	                        </div>

				        	<div class="form-group">
								<label for="brands_section_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="brands_section_title_ar" name="brands_section_title_ar" value="<?php echo get_option('brands_section_title_ar'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
							  	<label for="brands_section_number_ar" class="col-sm-12 control-label text-white">عدد الماركات التى تظهر فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="atco_half w-100" type="number" name="brands_section_number_ar" size="60" value="<?php echo get_option('brands_section_number_ar'); ?>">
							  </div>
							</div>

				        </div>

				        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

							<div class="form-group text-right">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="equipment_section_hidden" name="equipment_section_hidden" value="1" <?php echo get_option('equipment_section_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="equipment_section_hidden" class="text-white">إخفاء السكشن </label>
	                        </div>

				        	<div class="form-group">
								<label for="equipment_section_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان </label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="equipment_section_title_ar" name="equipment_section_title_ar" value="<?php echo get_option('equipment_section_title_ar'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="equipment_section_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('equipment_section_content_ar'), 'equipment_section_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'equipment_section_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'equipment_section_content_ar','class'=>'form-control',) );  ?>
								</div>
							</div>
							<div class="form-group text-left">
							  	<label for="equipment_section_number_ar" class="col-sm-12 control-label text-white">عدد  المعدات التى تظهر فى الصفحة </label>
							  	<div class="col-sm-12">
							    	<input class="atco_half w-100" type="number" name="equipment_section_number_ar" size="60" value="<?php echo get_option('equipment_section_number_ar'); ?>">
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

<?php else: ?>

<div class="container-fluid text-right padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center mcg-title"><span>service Center Page Settings</span></h1>
			</header>
		</div>

		<br/>

		<div class="d-flex align-items-start p-0 m-0">

			<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

				<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="false">Definition </button>

				<button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Services</button>

				<button class="nav-link" id="v-pills-thirdsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-thirdsection" type="button" role="tab" aria-controls="v-pills-thirdsection" aria-selected="false">Barnds</button>

				<button class="nav-link" id="v-pills-fourthsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-fourthsection" type="button" role="tab" aria-controls="v-pills-fourthsection" aria-selected="false">Equipment</button>

			</div>

			<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">

				<form class="form-horizontal form_back p-5" method="post" action="#">

				    <div class="tab-content" id="v-pills-tabContent">

						<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">

							<div class="form-group text-right">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="services_page_hidden" name="services_page_hidden" value="1" <?php echo get_option('services_page_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="services_page_hidden" class="text-white">Hidden Section</label>
	                        </div>

				        	<div class="form-group">
								<label for="services_page_title" class="col-sm-12 text-right  control-label text-white">Title</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="services_page_title" name="services_page_title" value="<?php echo get_option('services_page_title'); ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="services_page_content" class="col-sm-6 control-label text-white">Content</label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('services_page_content'), 'services_page_content',  array('textarea_rows'=>5,'textarea_name'=> 'services_page_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'services_page_content','class'=>'form-control',) );  ?>
								</div>
							</div>

							<div class="form-group">
							  	<label for="services_page_img" class="col-sm-12 text-right  control-label text-white">Image</label>
							  	<div class="col-sm-12 text-right ">
							    	<input class="services_page_img_url mcg_half" type="text" name="services_page_img" size="60" value="<?php echo get_option('services_page_img'); ?>">
							    	<a href="#" class="services_page_img_upload btn btn-info">Choose</a>
							    	<img class="services_page_img" src="<?php echo get_option('services_page_img'); ?>" height="100" style="max-width:100%" />
							  	</div>
							</div>
				        </div>      

						<div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
							<div class="form-group text-left">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="services_section_hidden" name="services_section_hidden" value="1" <?php echo get_option('services_section_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="services_section_hidden" class="text-white">Hidden Section</label>
	                        </div>

				        	<div class="form-group">
								<label for="services_section_title" class="col-sm-12 text-left  control-label text-white">Title</label>
								<div class="col-sm-12 text-left ">
									<input type="text" class="form-control" id="services_section_title" name="services_section_title" value="<?php echo get_option('services_section_title'); ?>">
								</div>
							</div>

							<div class="form-group text-left">
							  	<label for="services_section_number" class="col-sm-12 control-label text-white">Services Number Show</label>
							  	<div class="col-sm-12">
							    	<input class="atco_half w-100" type="number" name="services_section_number" size="60" value="<?php echo get_option('services_section_number'); ?>">
							  </div>
							</div>
						</div>

						<div class="tab-pane fade show" id="v-pills-thirdsection" role="tabpanel" aria-labelledby="v-pills-thirdsection-tab">

							<div class="form-group text-right">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="brands_section_hidden" name="brands_section_hidden" value="1" <?php echo get_option('brands_section_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="brands_section_hidden" class="text-white">Hidden Section</label>
	                        </div>

				        	<div class="form-group">
								<label for="brands_section_title" class="col-sm-12 text-right  control-label text-white">Title</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="brands_section_title" name="brands_section_title" value="<?php echo get_option('brands_section_title'); ?>">
								</div>
							</div>
							<div class="form-group text-left">
							  	<label for="brands_section_number" class="col-sm-12 control-label text-white">Brands Number Show </label>
							  	<div class="col-sm-12">
							    	<input class="atco_half w-100" type="number" name="brands_section_number" size="60" value="<?php echo get_option('brands_section_number'); ?>">
							  </div>
							</div>

				        </div>

				        <div class="tab-pane fade show" id="v-pills-fourthsection" role="tabpanel" aria-labelledby="v-pills-fourthsection-tab">

							<div class="form-group text-right">                  
	                            <div class="inline-block">
	                                <input type="checkbox" id="equipment_section_hidden" name="equipment_section_hidden" value="1" <?php echo get_option('equipment_section_hidden') == '1' ? 'checked' : ''; ?>>
	                            </div>
	                            <label for="equipment_section_hidden" class="text-white">Hidden Section</label>
	                        </div>

				        	<div class="form-group">
								<label for="equipment_section_title" class="col-sm-12 text-right  control-label text-white">Title</label>
								<div class="col-sm-12 text-right ">
									<input type="text" class="form-control" id="equipment_section_title" name="equipment_section_title" value="<?php echo get_option('equipment_section_title'); ?>">
								</div>
							</div>
							<div class="form-group">
								<label for="equipment_section_content" class="col-sm-6 control-label text-white">Content</label>
								<div class="col-sm-12">
	                				<?php wp_editor( get_option('equipment_section_content'), 'equipment_section_content',  array('textarea_rows'=>5,'textarea_name'=> 'equipment_section_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'equipment_section_content','class'=>'form-control',) );  ?>
								</div>
							</div>
							<div class="form-group text-left">
							  	<label for="equipment_section_number" class="col-sm-12 control-label text-white">Equipment Show Number</label>
							  	<div class="col-sm-12">
							    	<input class="atco_half w-100" type="number" name="equipment_section_number" size="60" value="<?php echo get_option('equipment_section_number'); ?>">
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

<?php endif; ?>



<?php



}