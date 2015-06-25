<?php


	class NightsWatch implements IFighter{

		private $array;

		public function __construct()
		{
			$this->array = array();
		}
		public function recruit($val)
		{
			if ($val instanceof IFighter)
				array_push($this->array, $val);
		}

		public function fight()
		{
			foreach ($this->array as $name) {
				$name->fight();
			}
		}

	}