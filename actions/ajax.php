<?php

/*
|--------------------------------------------------------------------------
| Ajax Actions
|--------------------------------------------------------------------------
|
| This file allows you to register custom ajax actions.
|
*/

use Horsaw\Actions\Ajax;

Ajax::register( 'horsaw-action', '\App\Controllers\MainController@action', 'both' );