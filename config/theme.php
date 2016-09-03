<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Theme Prefix
	|--------------------------------------------------------------------------
	|
	| Developing WordPress Themes requires you to have prefixes on all your functions,
	| custom post types, custom taxonomies, etc.
	|
	*/
	'prefix' => 'horsaw_',

	/*
	|--------------------------------------------------------------------------
	| Theme Text Domain
	|--------------------------------------------------------------------------
	|
	*/
	'text_domain' => 'horsaw-theme',

	/*
	|--------------------------------------------------------------------------
	| Theme Support
	|--------------------------------------------------------------------------
	|
	| This options allows you to set the features that your theme supports.
	|
	| @link https://developer.wordpress.org/reference/functions/add_theme_support/
	|
	*/
	'supports' => [ 'title-tag' ],

	/*
	|--------------------------------------------------------------------------
	| Custom Menus
	|--------------------------------------------------------------------------
	|
	*/
	'menus' => [
		'main-menu' => __( 'Main Menu', 'horsaw-theme' ),
	],
];