#!/usr/bin/php
<?php

$i = 1;
$str;
$tab;

if ($argc == 2)
{
	$pattern = '/\s+/';
	$str = trim($argv[1]);
	$str = preg_replace($pattern, ' ', $str);
	$tab = explode(" ", $str);
	while ($tab[$i])
	{
		print($tab[$i])." ";
		$i++;
	}
	print($tab[0])."\n";
}

?>
