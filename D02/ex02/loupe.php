#!/usr/bin/php
<?php

function upper($matches)
{
	return (strtoupper($matches[1])); }

$pattern_title = "/<a(.*)(title=\"(.*)\")>(.*)<\/a>/";

$str = file_get_contents($argv[1]);
$str = preg_replace_callback($pattern_title, 'upper', $str);
//$str = implode($array);
print($str);
?>