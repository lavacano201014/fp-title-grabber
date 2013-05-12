<?php
/*
 * HTML 2 Wiki converter
 * by Nicholas "Lavacano" O'Connor
 * Purpose: FUCKING PIECE OF HELL WHY HAS NOBODY WRITTEN A PHP PARSER FOR THIS YET
 */

// require_once("phpquery.php"); // y'know i bet this will be necessary, but let's comment it for now

function wikify($input) {
	// First, the easy shit
	// I swear to Odin's beard there's a better way to do this, but I can't PHP good
	$input = str_ireplace(array("<b>", "</b>", "<strong>", "</strong>"), "'''", $input);
	$input = str_ireplace(array("<i>", "</i>", "<em>", "</em>"), "''", $input); // italics
	// <u> still underlines
	
	// Font changes.
	// TODO: Actually implement font changes in a sane way. Right now I'm just stripping them.
	$input = preg_replace("/<font *>/i", "", $input);

	// And finally links. hooooooooo boyo, this gun b ugly
	$input = str_ireplace('<a href="', '[', $input);
	$input = str_ireplace('">', ' ', $input);
	$input = str_ireplace("</a>", "]", $input); // Of all these ugly fucks, this is the only one
						    // that I have confidence in not breaking later.

	return $input;
}
