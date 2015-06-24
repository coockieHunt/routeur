<?php
include_once('lib/router.class.php'); 
include_once('lib/route.class.php'); 

$router = new APP\Router($_GET['url']);


$router->get('/hello/:name', function($name){
	echo "Hello ".$name." !";
});

$router->post('/post/hello/:name', function($name){
	echo "Hello ".$name." !";
});


$router->match();

?>
