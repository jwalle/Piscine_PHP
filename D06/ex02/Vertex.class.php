<?php

require_once 'Color.class.php';

class Vertex {

	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_Col = '';
	public static $verbose = False;

	public function __construct (array $kwargs) {
		
		if (array_key_exists('x', $kwargs))
			$this->_setX(floatval($kwargs['x']));
		if (array_key_exists('y', $kwargs))
			$this->_y = floatval($kwargs['y']);
		if (array_key_exists('z', $kwargs))
			$this->_z = floatval($kwargs['z']);
		if (array_key_exists('w', $kwargs))
			$this->_w = floatval($kwargs['w']);
		if (array_key_exists('color', $kwargs))
			$this->_col = $kwargs['color'];
		else
			$this->_col = new Color( array( 'red' => 255, 'green' => 255 , 'blue' => 255));
		if (self::$verbose == True)
		{
			printf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, %s ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_col);
		}
		return ;
	}

	public function getX()
		{return $this->_x;}
	public function getY()
		{return $this->_y;}
	public function getZ()
		{return $this->_z;}
	public function getW()
		{return $this->_w;}

	private function _setX($val)
		{$this->_x = floatval($val);}

	private function _setY(float $val)
		{$this->_y = $val;}

	private function _setZ(float $val)
		{$this->_z = $val;}

	private function _setW(float $val)
		{$this->_w = $val;}


	public function __toString()
	{
		if (self::$verbose == True)
			return sprintf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, %s )", $this->_x, $this->_y, $this->_z, $this->_w, $this->_col);
		else
			return sprintf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f )", $this->_x, $this->_y, $this->_z, $this->_w);
	}

	public function __destruct()
	{
		if (self::$verbose == True)
		{
			printf("Vertex( x: %3.2f, y: %3.2f, z:%3.2f, w:%3.2f, %s ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_col);
		}
		return;
	}

	public function doc()
	{
		return file_get_contents("Vertex.doc.txt");
	}
}

?>