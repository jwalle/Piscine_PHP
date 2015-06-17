#!/usr/bin/php
<?php

if ($argc > 1)
{
	$str = $argv[1];
	$pattern = '/\s+/';
	$str = trim($str);
	$str = preg_replace($pattern, ' ', $str);
	print($str)."\n";
}
