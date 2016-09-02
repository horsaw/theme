<?php

use Horsaw\Assets\Style;
use Horsaw\Assets\Script;

// Custom Styles
Style::enqueue( 'horsaw-functions', __DIR__ . '/../style.css' );


// Custom Scripts
Script::enqueue( 'horsaw-functions', __DIR__ . '/../resources/assets/js/functions.js' );