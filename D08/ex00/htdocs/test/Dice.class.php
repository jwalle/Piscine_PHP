<?php
	class dice {

	private $nbDice;

	 public function __construct($val)
	 {
	 	$this->nbDice = $val;
	 }
	
	public function roll()
	{
		return ($this->nbDice * rand(1, 6));
	}
}
	
?>
