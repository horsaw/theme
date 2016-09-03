<?php

/**
 * Outputs the current year.
 *
 * @shortcode 'year'
 *
 * @return string
 */
function horsaw_shortcode_year() {
	return date( 'Y' );
}