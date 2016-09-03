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
$horsaw_app = new \Horsaw\Theme\App;

$horsaw_app->init();