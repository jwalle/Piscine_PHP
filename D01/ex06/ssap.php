#!/usr/bin/php
<?php

$i = 1;
$str;

if ($argc > 1)
{
	while($argv[$i])
	{
		$str .= " " . $argv[$i];
		$i++;
	}
	$pattern = '/\s+/';
	$str = trim($str);
	$str = preg_replace($pattern, ' ', $str);
	$tab = explode(" ", $str);
	sort($tab);
	$i = 0;
	while ($tab[$i])
	{
		print($tab[$i])."\n";
		$i++;
	}
}
?>
