<?php

	include_once("Lannister.class.php");

	class Tyrion extends Lannister{

		public function sleepWith($val) {
			if ($val instanceof Lannister)
				print("Not even if I'm drunk !" . PHP_EOL);
			else
				print("Let's do this." . PHP_EOL);
		}
	}

?>