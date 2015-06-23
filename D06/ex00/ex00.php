<?php

class Color {
	
	public $red = '';
	public $green = '';
	public $blue = '';
	public static $verbose = False;

	public function __construct (array $kwargs) {
		
		if (array_key_exists('red', $kwargs))
			$this->red = intval($kwargs['red']);
		if (array_key_exists('green', $kwargs))
			$this->green = intval($kwargs['green']);
		if (array_key_exists('green', $kwargs))
			$this->blue = intval($kwargs['blue']);
		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = intval($kwargs['rgb'] << 16);
			$this->green = intval($kwargs['rgb'] << 8);
			$this->blue = intval($kwargs['rgb']);
		}
		if (self::$verbose == True)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		return ;
	}

	public function __toString()
	{
		printf("Color( red: %3d, green: %3d, blue: %3d )\n", $this->red, $this->green, $this->blue);
		return ;
	}


	public function __destruct()
	{
		if (self::$verbose == True)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		return;
	}
}


?>