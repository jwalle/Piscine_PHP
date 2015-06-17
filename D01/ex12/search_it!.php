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
	while ($argc)
	{	
		if (!strcmp($argv[1],$tab[$argc]))
		{
			$argc++;
			print($tab[$argc])."\n";
			return ;
		}
		$argc -= 2;
	}
}
?>
