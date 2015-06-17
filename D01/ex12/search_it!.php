#!/usr/bin/php
<?php

$i = 2;
$str;

if ($argc > 1)
{
	while($argv[$i])
	{
		$str .= ":" . $argv[$i];
		$i++;
	}
	$tab = explode(":", $str);
	$i = 1;
	while ($tab[$argc])
	{
		if ($argv[1] == $tab[$i])
		{
			$argc++;
			print($tab[$argc--])."\n";
			return ;
		}
		$argc--;
		$argc--;
	}
}
?>
