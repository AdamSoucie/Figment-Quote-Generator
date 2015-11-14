<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: Figment Quote Generator
Description: Places quotes from "Journey into Imagination with Figment" at the end of posts
Author:      Impossibly Creative
Author URI:  http://impossiblycreative.com
*/

function figment_quote_generator( $content )
{
	if( is_single() )
	{
		echo '<div class="disney-quote-container">';
			echo '<p class="disney-quote-text">"';
				display_disney_quote_text();
			echo '"</p>';
		echo '</div>';
	}
}
add_action( 'genesis_entry_footer', 'disney_quote_generator', 20 );

function display_figment_quote_text()
{
	$quotes = array();
	$quotes[] = "One little spark of inspiration is at the heart of all creation.";
	$quotes[] = "Right at the start of everything that's new, one little spark lights up for you.";
	$quotes[] = "We all have sparks, imaginations. That's how our minds, create creations.";
	$quotes[] = "Imagination really comes around...makes downside up...and upside down!";

	$key = rand( 0, count( $quotes ) - 1 );

	echo $quotes[$key];
}