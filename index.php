<?php
require 'vendor/autoload.php';

$router = new APP\Router($_GET['url']);

$router->get('/hello-world', function(){
	echo "Hello wolrd !";
})

$router->get('/hello/:name', function($name){
	echo "Hello ".$name." !";
})

$router->post('/post/hello/:name', function($name)){
	echo "Hello ".$name." !";
}

?>
