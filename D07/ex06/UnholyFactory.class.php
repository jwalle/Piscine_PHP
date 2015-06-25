<?php

	class UnholyFactory{

		public $absorbed;

		public function __construct()
		{
			$this->absorbed = array();
		}

		public function absorb($val)
		{
			if ($val instanceof Fighter)
			{
				if (!in_array($val, $this->absorbed))
				{
					print("(Factory absorbed a fighter of type " . $val->getRet() . ")" . PHP_EOL);
					array_push($this->absorbed, $val);
					$this->absorbed[$val->getRet()] = $val;
				}
				else
					print("(Factory already absorbed a fighter of type " . $val->getRet() . ")" . PHP_EOL);
			}
			else
				print("(Factory can't absorb this, it's not a fighter" . ")" .  PHP_EOL);
		}
		public function fabricate($val)
		{
			if ($this->absorbed[$val] != 0)
			{
				print("(Factory fabricates a fighter of type " . $val . ")" . PHP_EOL);
				return(new $this->absorbed[$val]);
			}
			else
				print("(Factory hasn't absorbed any fighter of type " . $val . ")" . PHP_EOL);
		}
	}

?>