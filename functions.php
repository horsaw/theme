<?php

define( 'HORSAW_THEME', __DIR__ . DIRECTORY_SEPARATOR );

/*
|--------------------------------------------------------------------------
| Register the Composer Auto Loader
|--------------------------------------------------------------------------
*/
require_once HORSAW_THEME . 'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Initialize the Application
|--------------------------------------------------------------------------
*/
$horsaw_app = \Horsaw\Theme\App::get_instance();

$horsaw_app->init();