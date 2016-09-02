<?php

use Horsaw\Taxonomy;

Taxonomy::register( 'horsaw_category', __( 'Category', 'horsaw-theme' ), __( 'Categories', 'horsaw-theme' ) )
	->set_post_types( [ 'post', 'page' ] );