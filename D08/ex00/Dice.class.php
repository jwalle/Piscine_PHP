<?
	class dice {

	private $nbDice;

	 public function __construct($val)
	 {
	 	$this->nbDice = $val;
	 }
	getDice()
	{
		return ($this->nbDice * rand(1, 6));
	}
}
	
?>