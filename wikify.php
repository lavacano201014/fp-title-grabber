<?php
/*
 * HTML 2 Wiki converter
 * by Nicholas "Lavacano" O'Connor
 * Purpose: FUCKING PIECE OF HELL WHY HAS NOBODY WRITTEN A PHP PARSER FOR THIS YET
 */

/*
 * JUST AS A HEADS UP: THIS FILE IS DEPRECATED UNTIL SUCH TIME AS I CAN STOP
 * FUCKING RAGING AT DOM PARSING LONG ENOUGH TO FIX IT.
 * by the way it's a real pain in the ass
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
	// Thank you to Rohan
	$input = preg_replace("/<(f|\/f)ont.*?>/i", "", $input);
	//$input = str_replace("</font>", "", $input);

	// And finally links. hooooooooo boyo, this gun b ugly
	$input = str_ireplace('<a href="', '[', $input);
	$input = str_ireplace('">', ' ', $input);
	$input = str_ireplace("</a>", "]", $input); // Of all these ugly fucks, this is the only one
						    // that I have confidence in not breaking later.

	return $input;
}
