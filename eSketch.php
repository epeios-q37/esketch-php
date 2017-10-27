<?php

$ZNDq_affix="esketch";

// Begin of generic part.
echo "0\n";
ZNDq_init();
echo "1\n";
ZNDq_register( $ZNDq_affix . "znd" );
echo "2\n";

class ZNDq {
	static public function wrapperInfo()
	{
		return ZNDq_wrapperInfo(); 
	}
	static public function componentInfo()
	{
		return ZNDq_componentInfo(); 
	}
	static protected function register( $arguments )
	{
		return ZNDq_register( $arguments );
	}
}
// End of generic part.

class eSketch extends ZNDq {
	static public function returnArgument( $argument )
	{
	 return ZNDq_wrapper( 0, $argument );
	}
}
?>