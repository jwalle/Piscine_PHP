#!/usr/bin/php
<?php




$ret = file_get_contents($argv[1]);


$pattern_nospace = "/href=.*>(.*)<.*/";
$pattern_space = "/href=.*>[ ]*+(.*)[ ]+<.*/";
$pattern_title = "/<a.*title=\"(.*)\">.*<\/a/";

preg_replace_callback($pattern_title, function ($matches)
{
	$upper = strtoupper($matches[1]);
	$GLOBALS['ret'] = preg_replace("/$matches[1]/", $upper, $GLOBALS['ret']);}
	, $ret);


preg_replace_callback($pattern_space, function ($matches)
{

	$upper = strtoupper($matches[1]);
	$GLOBALS['ret'] = preg_replace("/$matches[1]/", $upper, $GLOBALS['ret']);}
	, $ret);


preg_replace_callback($pattern_nospace, function ($matches)
{
	$upper = strtoupper($matches[1]);
	$GLOBALS['ret'] = preg_replace("/$matches[1]/", $upper, $GLOBALS['ret']);}
 	, $ret);


echo $ret;
?>
