#!/usr/bin/php
<?php

function ft_is_sort($tab)
{
	$i = 0;
	$tab_s = $tab;
	sort($tab_s, SORT_STRING);
	if ($tab_s == $tab)
		return true;
	return false;
}

?>
