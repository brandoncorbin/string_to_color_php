<?php

/**
 * string_to_color("My string")
 * main function for generating a color from a string
 */
function string_to_color( $string ) {
	return stc_shade( stc_int_to_color( stc_hash( $string ) ), 1 );
}

/**
 * stc_hash("This is my string")
 * generates an hashed int from a string
 */
function stc_hash( $word ) {
	return hexdec( substr( sha1( $word ), 0, 15 ) );
}

/**
 * str_int_to_color(123456)
 * Generates a hex based dechex of a int.
 */
function stc_int_to_color( $int ) {
	return substr( "000000".dechex( $int ), -6 );
}

/** 
* stc_shade('#d34d3d', .4)
* shades a color so it's not so obsence
* function based on http://lab.clearpixel.com.au/2008/06/darken-or-lighten-colours-dynamically-using-php/
*/

function stc_shade( $hex, $percent ) {
	
	$hash = '';
	if ( stristr( $hex, '#' ) ) {
		$hex = str_replace( '#', '', $hex );
		$hash = '#';
	}
	/// HEX TO RGB
	$rgb = array( hexdec( substr( $hex, 0, 2 ) ), hexdec( substr( $hex, 2, 2 ) ), hexdec( substr( $hex, 4, 2 ) ) );
	//// CALCULATE
	for ( $i=0; $i<3; $i++ ) {
		// See if brighter or darker
		if ( $percent > 0 ) {
			// Lighter
			$rgb[$i] = round( $rgb[$i] * $percent ) + round( 255 * ( 1-$percent ) );
		} else {
			// Darker
			$positivePercent = $percent - ( $percent*2 );
			$rgb[$i] = round( $rgb[$i] * $positivePercent ) + round( .5 * ( 1-$positivePercent ) );
		}
		// In case rounding up causes us to go to 256
		if ( $rgb[$i] > 255 ) {
			$rgb[$i] = 255;
		}
	}
	//// RBG to Hex
	$hex = '';
	for ( $i=0; $i < 3; $i++ ) {
		// Convert the decimal digit to hex
		$hexDigit = dechex( $rgb[$i] );
		// Add a leading zero if necessary
		if ( strlen( $hexDigit ) == 1 ) {
			$hexDigit = "0" . $hexDigit;
		}
		// Append to the hex string
		$hex .= $hexDigit;
	}
	return $hash.$hex;
}


?>
