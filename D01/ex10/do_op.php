#!/usr/bin/php
<?php
	if ($argc == 4)
	{
		$num;
		if (strstr($argv[2], '+'))
			$num = $argv[1] + $argv[3];
		elseif (strstr($argv[2], '-'))
			$num = $argv[1] - $argv[3];
		elseif (strstr($argv[2], '*'))
			$num = intval($argv[1]) * intval($argv[3]);
		elseif (strstr($argv[2], '/'))
			$num = $argv[1] / $argv[3];
		elseif (strstr($argv[2], '%'))
			$num = $argv[1] % $argv[3];
		print($num)."\n";
	}

?>
