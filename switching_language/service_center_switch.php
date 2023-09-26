<?php 

switch ( ICL_LANGUAGE_CODE ){

    case 'en':
		$services_page_hidden            = get_option('services_page_hidden');
		$services_page_title             = get_option('services_page_title');
		$services_page_content           = get_option('services_page_content');
		$services_page_img               = get_option('services_page_img');
		$services_section_hidden         = get_option('services_section_hidden');
		$services_section_title          = get_option('services_section_title');
		$services_section_number         = get_option('services_section_number');
		$brands_section_hidden           = get_option('brands_section_hidden');
		$brands_section_title            = get_option('brands_section_title');
		$brands_section_number           = get_option('brands_section_number');
		$equipment_section_hidden        = get_option('equipment_section_hidden');
		$equipment_section_title         = get_option('equipment_section_title');
		$equipment_section_content       = get_option('equipment_section_content');
		$equipment_section_number        = get_option('equipment_section_number');
    break;
    case 'ar':
		$services_page_hidden            = get_option('services_page_hidden');
		$services_page_title             = get_option('services_page_title_ar');
		$services_page_content           = get_option('services_page_content_ar');
		$services_page_img               = get_option('services_page_img_ar');
		$services_section_hidden         = get_option('services_section_hidden');
		$services_section_title          = get_option('services_section_title_ar');
		$services_section_number         = get_option('services_section_number_ar');
		$brands_section_hidden           = get_option('brands_section_hidden');
		$brands_section_title            = get_option('brands_section_title_ar');
		$brands_section_number           = get_option('brands_section_number_ar');
		$equipment_section_hidden        = get_option('equipment_section_hidden');
		$equipment_section_title         = get_option('equipment_section_title_ar');
		$equipment_section_content       = get_option('equipment_section_content_ar');
		$equipment_section_number        = get_option('equipment_section_number_ar');
    break;
    default:
		$services_page_hidden            = '';
		$services_page_title             = '';
		$services_page_content           = '';
		$services_page_img               = '';
		$services_section_hidden         = '';
		$services_section_title          = '';
		$services_section_number         = '';
		$brands_section_hidden           = '';
		$brands_section_title            = '';
		$brands_section_number           = '';
		$equipment_section_hidden        = '';
		$equipment_section_title         = '';
		$equipment_section_content       = '';
		$equipment_section_number        = '';
    }