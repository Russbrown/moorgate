<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Layouts
|--------------------------------------------------------------------------
|
| specify the name of the layouts and their fields associated with them
*/

$config['default_layout'] = 'main';

$config['layouts_folder'] = '_layouts';

$config['layouts']['main'] = array(
	//'file' 		=> $config['layouts_path'].'main',
	// 'class'		=> 'Main_layout',
	// 'filepath' => 'libraries',
	// 'filename' => 'Main_layout.php',
	'fields'	=> array(
		'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
		'page_title' => array('label' => lang('layout_field_page_title')),
		'meta_description' => array('label' => lang('layout_field_meta_description')),
		'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
		'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
		'heading' => array('label' => lang('layout_field_heading')),
		'body' => array('label' => lang('layout_field_body'), 'type' => 'textarea', 'description' => lang('layout_field_body_description')),
		'body_class' => array('label' => lang('layout_field_body_class')),
	)
);

$config['layouts']['content_page'] = array(
	'fields'	=> array(
		'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
		'page_title' => array('label' => lang('layout_field_page_title')),
		'meta_description' => array('label' => lang('layout_field_meta_description')),
		'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
		'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),
		'page_img' => array('label' => lang('layout_field_page_image')),
		'heading_left_column' => array('label' => lang('layout_field_heading_left_column')),
		'heading_right_column' => array('label' => lang('layout_field_heading_right_column')),
		'body_left_column' => array('label' => lang('layout_field_body_left_column'), 'type' => 'textarea', 'description' => lang('layout_field_body_left_column_description')),
		'body_right_column' => array('label' => lang('layout_field_body_right_column'), 'type' => 'textarea', 'description' => lang('layout_field_body_right_column_description')),				
		'body_class' => array('label' => lang('layout_field_body_class')),
	)
);

$config['layouts']['vehicle_page'] = array(
	'fields'	=> array(
		'Header' => array('type' => 'fieldset', 'label' => 'Header', 'class' => 'tab'),
		'page_title' => array('label' => lang('layout_field_page_title')),
		'meta_description' => array('label' => lang('layout_field_meta_description')),
		'meta_keywords' => array('label' => lang('layout_field_meta_keywords')),
		'Body' => array('type' => 'fieldset', 'label' => 'Body', 'class' => 'tab'),			
		'body_class' => array('label' => lang('layout_field_body_class')),
	)
);

/* End of file MY_fuel_layouts.php */
/* Location: ./application/config/MY_fuel_layouts.php */

