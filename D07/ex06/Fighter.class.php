<?php

	abstract class Fighter {

		abstract public function fight($target);

		private $ret = '';
		public function __construct($val)
		{
			$this->ret = $val;
		}

		public function getRet()
		{
			return ($this->ret);
		}
	}

?>