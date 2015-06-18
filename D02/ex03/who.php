#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
$format = "a256login/a4id/a32line/ipid/itype/I2time/a256host/I16pad";

$i = 0;
$fd = file_get_contents("/var/run/utmpx");
$fd = substr($fd, 1256);
while ($fd)
{
	$info[$i++] = unpack($format, $fd);
	$fd = substr($fd, 628);
}
sort($info);
$i = 0;

while ($info[$i])
{
	if ($info[$i]["type"]  == 7)
	{
		echo $info[$i]["login"];
		echo "   ";
		echo $info[$i]["line"];
		echo "  ";
		echo strftime("%b %e %R", $info[$i]["time1"]);
		echo "\n";
	}
	$i++;
}

?>