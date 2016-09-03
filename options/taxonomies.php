<?php

/*
|--------------------------------------------------------------------------
| Custom Taxonomies
|--------------------------------------------------------------------------
|
| This file allows you to register Custom Taxonomies.
|
*/

use Horsaw\Helpers\Taxonomy;

Taxonomy::make( 'horsaw_category', __( 'Category', 'horsaw-theme' ), __( 'Categories', 'horsaw-theme' ) )
	->set_post_types( [ 'post', 'page' ] );