<?php

class Vector {

	private $_x;
	private $_y;
	private $_z;
	private $_w = 0.0;
	public static $verbose = False;


	public function getX()
		{return $this->_x;}
	public function getY()
		{return $this->_y;}
	public function getZ()
		{return $this->_z;}
	public function getW()
		{return $this->_w;}

	public function __construct (array $kwargs) {
		
		if (array_key_exists('orig', $kwargs))
			$orig = $kwargs['orig'];
		else
			$orig = new Vertex( array( 'x' => 0.0, 'y' => 0.0, 'z' => 0.0 ));

		$this->_x = $kwargs['dest']->getX() - $orig->getX();
		$this->_y = $kwargs['dest']->getY() - $orig->getY();
		$this->_z = $kwargs['dest']->getZ() - $orig->getZ();
		$this->_w = 0.0;
	
		if (self::$verbose == True)
			printf($this." constructed\n");
		return ;
	}


	public function __toString()
	{
		return sprintf("Vector( x:%3.2f, y:%3.2f, z:%3.2f, w:%3.2f )", $this->getX(), $this->getY(), $this->getZ(), $this->getW());
	}


	public function __destruct()
	{
		if (self::$verbose == True)
		{
			print($this." destructed\n");
		}
		return;
	}

	public function magnitude()
	{ return sqrt($this->getX() * $this->getX() + $this->getY() * $this->getY() + $this->getZ() * $this->getZ());}

	public function normalize()
	{
		$magn = $this->magnitude();

		return (new Vector( array( 'dest' => new Vertex( array ('x' => $this->getX() / $magn, 'y' => $this->getY() / $magn, 'z' => $this->getZ() / $magn) ) ) ) );
	}

	public function add(Vector $rhs)
	{
		return (new Vector( array( 'dest' => new Vertex( array ('x' => $this->getX() + $rhs->getX(), 'y' => $this->getY() + $rhs->getY(), 'z' => $this->getZ() + $rhs->getZ()) ) ) ) );	
	}

	public function sub(Vector $rhs)
	{
		return (new Vector( array( 'dest' => new Vertex( array ('x' => $this->getX() - $rhs->getX(), 'y' => $this->getY() - $rhs->getY(), 'z' => $this->getZ() - $rhs->getZ()) ) ) ) );	
	}

	public function opposite()
	{
		return (new Vector( array( 'dest' => new Vertex( array ('x' => $this->getX() * -1, 'y' => $this->getY() * -1, 'z' => $this->getZ() * -1) ) ) ) );	
	}

	public function scalarProduct( $k )
	{
		return (new Vector( array( 'dest' => new Vertex( array ('x' => $this->getX() * $k, 'y' => $this->getY() * $k, 'z' => $this->getZ() * $k) ) ) ) );	
	}

	public function dotProduct( $rhs )
		{return ($this->getX() * $rhs->getX() + $this->getY() * $rhs->getY() + $this->getZ() * $rhs->getZ());}

	public function cos ($rhs)
	{	
		$magn = $this->magnitude();

		return ($this->dotProduct($rhs) / (sqrt(($this->getX() * $this->getX() + $this->getY() * $this->getY() + $this->getZ() * $this->getZ()) * ($rhs->getX() * $rhs->getX() + $rhs->getY() * $rhs->getY() + $rhs->getZ() * $rhs->getZ()))));
	}

	public function crossProduct($rhs)
	{
		return (new Vector( array( 'dest' => new Vertex( array ('x' => $this->getY() * $rhs->getZ() - $this->getZ() * $rhs->getY(), 'y' => $this->getZ() * $rhs->getX() - $this->getX() * $rhs->getZ(), 'z' => $this->getX() * $rhs->getY() - $this->getY() * $rhs->getX()) ) ) ) );	
	}

	public function doc()
	{
		return file_get_contents("Vector.doc.txt");
	}
}

?>