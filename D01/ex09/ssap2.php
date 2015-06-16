#!/usr/bin/php
<?php
function firstChar($string)
{
	return($string[0]);
}
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
	sort($tab, SORT_STRING | SORT_FLAG_CASE);
	$i = 0;
	while ($tab[$i])
	{
		if (preg_match("/^[a-zA-Z]$/",firstChar($tab[$i])))
			print($tab[$i])."\n";
		$i++;
	}
	rsort($tab, SORT_NUMERIC);
	$i = 0;
	while ($tab[$i])
	{
		if (preg_match("/^[1-9]$/",firstChar($tab[$i])))
			print($tab[$i])."\n";
		$i++;
	}
	sort($tab);
	$i = 0;
	while ($tab[$i])
	{
		if (!preg_match("/^[a-zA-Z1-9]$/",firstChar($tab[$i])))
			print($tab[$i])."\n";
		$i++;
	}

}

?>
