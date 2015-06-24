<?php
/**
* 
*/

namespace APP;
use Exception;

class Router
{

	private $_url;
	private	$_routes = [];

	public function __construct($url){
		$this->_url = $url;
	}

	public function get($path, $callable){
		$route = new Route($path, $callable);
		$this->_routes['GET'] = $route;
	}

	public function post($path, $callable){
		$route = new Route($path, $callable);
		$this->_routes['POST'] = $route;
	}

	public function match(){
		if (isset($this->routes[$_SERVER['REQUEST_METHOD']])) {
			throw new \Exception('no routtes matches');
		}
	}

	public function match_view(){
		echo "<pre>";
		print_r($this->_routes);
		echo "</pre>";
	}
}
?>