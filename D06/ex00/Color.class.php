<?php

class Color {
	
	public $red = '';
	public $green = '';
	public $blue = '';
	public static $verbose = False;

	public function __construct (array $kwargs) {
		
		if (array_key_exists('red', $kwargs))
			$this->red = intval($kwargs['red'] % 256);
		if (array_key_exists('green', $kwargs))
			$this->green = intval($kwargs['green']);
		if (array_key_exists('blue', $kwargs))
			$this->blue = intval($kwargs['blue'] % 256);
		if (array_key_exists('rgb', $kwargs))
		{
			$this->red = intval($kwargs['rgb'] >> 16) % 256;
			$this->green = intval($kwargs['rgb'] >> 8) % 256;
			$this->blue = intval($kwargs['rgb'] % 256);
		}
		if (self::$verbose == True)
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
		return ;
	}

	public function __toString()
	{
		return sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue);
	}

	public function add(Color $val)
	{
		return new color ( array('red' => ($this->red + $val->red) % 256 , 'green' => ($this->green + $val->green) % 256, 'blue' => ($this->blue + $val->blue) % 256));
	}

	public function sub(Color $val)
	{
		return new color ( array('red' => ($this->red - $val->red) % 256 , 'green' => ($this->green - $val->green) % 256, 'blue' => ($this->blue - $val->blue) % 256));
	}

	public function mult($n)
	{
		return new color ( array('red' => ($this->red * $n) % 256 , 'green' => ($this->green * $n) % 256, 'blue' => ($this->blue * $n) % 256));
	}


	public function __destruct()
	{
		if (self::$verbose == True)
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
		return;
	}

	public function doc()
	{
		return file_get_contents("Color.doc.txt");
	}
}

?>