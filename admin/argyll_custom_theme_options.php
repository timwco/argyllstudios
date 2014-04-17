<?php
/*
	File for all Custom Theme Options

*/


// General Settings
$general = new TopPage(array(
	'menu_title' => 'Theme Options',
	'page_title' => 'General',
	'menu_slug' => 'theme_settings',
	'icon_url' =>  $url . '/admin/arIcon.png',
	'position' => 3
));
$general->addInput(array(
	'id' => 'analytics',
	'label' => 'Google Analytics Number',
	'desc' => 'Format Example : UA-XXXXX-X',
));
$general->addInput(array(
	'id' => 'copyright',
	'label' => 'Footer Copyright',
));
$general->addTextarea(array(
	'id' => 'accepting',
	'label' => 'Contact Page Text',
));