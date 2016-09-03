<?php

use Horsaw\Assets\Asset;

/*
|--------------------------------------------------------------------------
| Custom Styles
|--------------------------------------------------------------------------
|
*/
Asset::enqueue( 'style', 'horsaw-theme-styles', 'css/style.css' );

/*
|--------------------------------------------------------------------------
| Custom Scripts
|--------------------------------------------------------------------------
|
*/
Asset::enqueue( 'script', 'horsaw-theme-functions', 'js/functions.js' )
	->depends_on( 'jquery' )
	->with( 'theme_data', [
		'ajax_url' => admin_url( 'admin-ajax.php' ),
		'home_url' => home_url( '/' ),
	] );
