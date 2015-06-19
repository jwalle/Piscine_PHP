#!/usr/bin/php
<?php
 date_default_timezone_set('Europe/Paris');
$tab;
$j_s = array(lundi, Lundi, Mardi, mardi, mercredi, Mercredi, Jeudi, jeudi, vendredi, Vendredi, Samedi, samedi, dimanche, Dimanche);
$day;
$mois = array(1 => 'janvier', 2 => 'fevrier' , 3 => 'mars', 4 => 'avril', 5 => 'mai'
	, 6 => 'juin', 7 => 'juillet' , 8 => 'aout', 9 => 'septembre', 10 => 'octobre' , 11 => 'novembre', 12 => 'decembre');
$month;
$year;
$hour;
$min;
$sec;
$hour_total;
$time;


$i = 0;
if ($argc == 2)
{
	$tab = explode(" ", $argv[1]);
	$hour_total = explode(":", $tab[4]);

	if (!in_array($tab[0], $j_s))
	{
		echo "Wrong Format\n";
		return ;
	}
	$day = intval($tab[1]);
	$month = array_search(strtolower($tab[2]), $mois);
	if (is_numeric($tab[3]))
		$year = intval($tab[3]);
	if (is_numeric($hour_total[0]))
		$hour = intval($hour_total[0]);
	if (is_numeric($hour_total[1]))
		$min = intval($hour_total[1]);
	if (is_numeric($hour_total[2]))
		$sec = intval($hour_total[2]);
	$time = mktime($hour, $min, $sec, $month, $day, $year);
	if (!$year || !$hour || !$min || !$sec || !$month || !$day || $time <= 0)
	{
		echo "Wrong Format\n";
		return ;
	}
	//print("$day/$month/$year $hour h $min m $sec s\n");

	print("$time\n");
}
?>
