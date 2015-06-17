#!/usr/bin/php
<?php

if ($argc == 2)
{
	$i = 0;
	$n1 = 2;
	$n2 = 1;
	$num1;
	$num2;
	$signe;
	$ret;
	$pattern = '/\s+/';
	$str = trim($argv[1]);
	$str = preg_replace($pattern, '', $str);
	if ($str[0] == '-')
	{
		$n1 = -1;
		$i++;
	}
	while (is_numeric($str[$i]))
	{
		$num1 .= $str[$i];
		$i++;
	}
	$signe = $str[$i];
	$i++;
	if ($str[$i] == '-')
	{
		$n2 = -1;
		$i++;
	}
	while ($str[$i])
	{
		if (is_numeric($str[$i]))
			$num2 .= $str[$i];
		else
		{
			echo "Syntax Error\n";
			return ;
		}
		$i++;
	}
	$num1 *= $n1;
	$num2 *= $n2;
	if ($signe == '+')
		$ret = $num1 + $num2;
	else if ($signe == '-')
		$ret = $num1 - $num2;
	else if ($signe == '*')
		$ret = $num1 * $num2;
	else if ($signe == '/')
		$ret = $num1 / $num2;
	else if ($signe == '%')
		$ret = $num1 % $num2;
	else
	{
		echo "Syntax Error\n";
		return ;
	}
	print($ret)."\n";
}
?>
