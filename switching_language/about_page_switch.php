<?php 

switch ( ICL_LANGUAGE_CODE ){

    case 'en':
		$about_page_hidden            = get_option('about_page_hidden');
		$about_page_title             = get_option('about_page_title');
		$about_page_content           = get_option('about_page_content');
		$about_page_img               = get_option('about_page_img');
		$about_affiliate_hidden       = get_option('about_affiliate_hidden');
		$about_affiliate_title        = get_option('about_affiliate_title');
		$about_affiliate_number       = get_option('about_affiliate_number');
		$information_hidden           = get_option('information_hidden');
		$information_title            = get_option('information_title');
		$information_second_title     = get_option('information_second_title');
		$information_img              = get_option('information_img');
		$information_second_img       = get_option('information_second_img');
    break;
    case 'ar':
		$about_page_hidden            = get_option('about_page_hidden');
		$about_page_title             = get_option('about_page_title_ar');
		$about_page_content           = get_option('about_page_content_ar');
		$about_page_img               = get_option('about_page_img_ar');
		$about_affiliate_hidden       = get_option('about_affiliate_hidden');
		$about_affiliate_title        = get_option('about_affiliate_title_ar');
		$about_affiliate_number       = get_option('about_affiliate_number_ar');
		$information_hidden           = get_option('information_hidden');
		$information_title            = get_option('information_title_ar');
		$information_second_title     = get_option('information_second_title_ar');
		$information_img              = get_option('information_img_ar');
		$information_second_img       = get_option('information_second_img_ar');
    break;
    default:
		$about_page_hidden            = '';
		$about_page_title             = '';
		$about_page_content           = '';
		$about_page_img               = '';
		$about_affiliate_hidden       = '';
		$about_affiliate_title        = '';
		$about_affiliate_number       = '';
		$information_hidden           = '';
		$information_title            = '';
		$information_second_title     = '';
		$information_img              = '';
		$information_second_img       = '';
    }