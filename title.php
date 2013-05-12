<?php

header("Content-Type: text/plain");
/*
Facepunch Title Fetcher
by Nicholas "Lavacano" O'Connor
Purpose: Fetch titles on Facepunch (for use with Wikipunch)
*/

require_once("phpquery.php");
require_once("wikify.php");

#$userpage = file_get_contents("http://www.facepunch.com/member.php?u=" . $_GET["userid"], "r");

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://www.facepunch.com/member.php?u=" . $_GET["userid"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$userpage = curl_exec($ch);
curl_close($ch);

# TODO - see if there's a way to make this not load as much into the server's
#        memory. I know it's all plaintext, but still.

$phpquerydoc = phpQuery::newDocument($userpage); // i have no idea if it's necessary to keep the return value

$result = pq("span")->find(".usertitle")->html();

if (!$_GET["mediawiki"]) { echo '{"fp_title": "'.str_replace("\"", "\\\"", $result).'"}'; }
else {
	#echo '{"fp_title": "netswim/wikipunch/title.php: TODO: Implement MediaWiki conversion (probably gonna cheat and use something else)"}';

	$wikified = wikify($result);

	echo '{"fp_title": "'.str_replace("\"", "\\\"", $wikified).'"}';
}
