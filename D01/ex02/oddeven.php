#!/usr/bin/php
<?php

$number;

while (42)
{	
	echo "Entrez un nombre : ";
	if (feof(STDIN) == true)
		break;
	$number = trim(fgets(STDIN));
	if (is_numeric($number))
	{
		if ($number % 2 == 0)
			echo "Le chiffre $number est Pair\n";
		else
			echo "Le chiffre $number est Impair\n";
	}
	else
		print "$number n'est pas un chiffre\n";
}

?>
