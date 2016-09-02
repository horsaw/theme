<?php

/*
|--------------------------------------------------------------------------
| Frontend Actions
|--------------------------------------------------------------------------
|
| This file allows you to register custom frontend actions.
|
*/

use Horsaw\Actions\Action;

Action::register( 'horsaw-action', '\App\Controllers\MainController@action' );