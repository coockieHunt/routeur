<?php 	
namespace APP;

class Route {

	private $_patch;
	private	$_callable;

	public function __construct($patch , $callable){
		$this->_patch = $patch;
		$this->_callable = $callable;
	}
}

 ?>