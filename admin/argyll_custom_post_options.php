<?php


////////////////////////////////////////
//////// Work Register
////////////////////////////////////////
function work_register() {
	$args = array(
    	'label' => __('Work'),
    	'singular_label' => __('work'),
    	'public' => true,
    	'show_ui' => true,
    	'capability_type' => 'page',
    	'hierarchical' => true,
    	'_builtin' => false,
    	'supports' => array('title','editor','thumbnail', 'page-attributes'),
    	'menu_icon' => get_stylesheet_directory_uri() . '/images/port_icon.png',
    	'rewrite' => array('slug'=>'work','with_front'=>false),
    	'menu_position' => 20
    );

	register_post_type( 'work' , $args );
	flush_rewrite_rules();
}
add_action('init', 'work_register');


// -> Portfolio

$work = new UIElement('work');
$work->createMetabox(array(
	'id' => 'work_stats',
	'title' => 'Work Piece Info',
));
$work->addRadiobuttons(array(
	'id' => 'work_type',
	'label' => 'Type',
	'standard' => 'web',
	'options' => array(
		'Website' => 'web',
		'Mobile Site' => 'mobile',
		'Other' => 'other'
	),
));
$work->addInput(array(
	'id' => 'work_desc',
	'label' => 'Description',
));
$work->addInput(array(
	'id' => 'work_short',
	'label' => 'Short Description',
));
$work->addInput(array(
	'id' => 'work_image_1',
	'label' => 'Image 1',
));
$work->addInput(array(
	'id' => 'work_image_2',
	'label' => 'Image 2',
));
$work->addInput(array(
	'id' => 'work_image_3',
	'label' => 'Image 3',
));
$work->addInput(array(
	'id' => 'work_image_4',
	'label' => 'Image 4',
));
$work->addInput(array(
	'id' => 'work_image_5',
	'label' => 'Image 5',
));