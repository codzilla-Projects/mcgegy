<?php 

function contacts_page_area_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['mcg_save'] ) && !empty( $_POST['mcg_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,[])){

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
				<h1 class="text-center mcg-title"><span>إعدادات صفحة  تواصل معنا </span></h1>
			</header>
		</div>
		<br/>

		<div class="col-sm-12 col-md-12 col-lg-12 form_back_ar no-margin-right p-5" id="v-pills-tabContent">
			<form class="form-horizontal" method="post" action="#">
				<div class="form-group text-right">                  
                    <div class="inline-block">
                        <input type="checkbox" id="contact_page_hidden" name="contact_page_hidden" value="1" <?php echo get_option('contact_page_hidden') == '1' ? 'checked' : ''; ?>>
                    </div>
                    <label for="contact_page_hidden" class="text-white">إخفاء السكشن</label>
                </div>
	        	<div class="form-group">
					<label for="contact_page_title_ar" class="col-sm-12 text-right  control-label text-white">العنوان الرئيسي</label>
					<div class="col-sm-12 text-right ">
						<input type="text" class="form-control" id="contact_page_title_ar" name="contact_page_title_ar" value="<?php echo get_option('contact_page_title_ar'); ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="contact_form_ar" class="col-sm-12 text-right  control-label text-white">الرمز المختصر لنموذج اتصل بنا العربي</label>
					<div class="col-sm-12 text-right ">
						<input type="number" class="form-control" id="contact_form_ar" name="contact_form_ar" value="<?php echo get_option('contact_form_ar'); ?>">
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
</div><!-- /container -->


<?php else: ?>
<div class="container-fluid text-right padding-right-4">
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
			<!-- Top Navigation -->
			<header class="codrops-header">
				<h1 class="text-center mcg-title"><span>Contact Us Page Settings</span></h1>
			</header>
		</div>
		<br/>
		<div class="col-sm-12 col-md-12 col-lg-12 form_back no-margin-left p-5" id="v-pills-tabContent">
			<form class="form-horizontal" method="post" action="#">
				<div class="form-group text-right">                  
                    <div class="inline-block">
                        <input type="checkbox" id="contact_page_hidden" name="contact_page_hidden" value="1" <?php echo get_option('contact_page_hidden') == '1' ? 'checked' : ''; ?>>
                    </div>
                    <label for="contact_page_hidden" class="text-white">Hidden Section</label>
                </div>
	        	<div class="form-group">
					<label for="contact_page_title" class="col-sm-12 text-right  control-label text-white">Title</label>
					<div class="col-sm-12 text-right ">
						<input type="text" class="form-control" id="contact_page_title" name="contact_page_title" value="<?php echo get_option('contact_page_title'); ?>">
					</div>
				</div> 

				<div class="form-group">
					<label for="contact_form_english" class="col-sm-12 text-right  control-label text-white">Contact Form Shortcode</label>
					<div class="col-sm-12 text-right ">
						<input type="number" class="form-control" id="contact_form_english" name="contact_form_english" value="<?php echo get_option('contact_form_english'); ?>">
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
</div><!-- /container -->
<?php endif; ?>

<?php

}