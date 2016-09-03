<?php

/*
|--------------------------------------------------------------------------
| Custom Post Types
|--------------------------------------------------------------------------
|
| This file allows you to register custom post types.
|
| @see https://developer.wordpress.org/resource/dashicons/
|
*/

use Horsaw\Helpers\Post_Type;

Post_Type::make( 'horsaw_testimonial', __( 'Testimonial', 'horsaw-theme' ), __( 'Testimonials', 'horsaw-theme' ) )
	->set_menu_icon( 'dashicons-format-quote' );