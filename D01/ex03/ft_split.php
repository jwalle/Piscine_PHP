#!/usr/bin/php
<?php
function ft_split($str)
{
	$pattern = '/\s+/';
	$str = trim($str);
	$str = preg_replace($pattern, ' ', $str);
	$tab = explode(" ", $str);
	sort($tab, SORT_STRING);
	return $tab;
}
?>
