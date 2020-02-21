<?php
function debug($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}
define("ROOT_DIR",dirname(dirname(__FILE__)));

if(is_file(ROOT_DIR."/vendor/Router.php"))
{
	require(ROOT_DIR."/vendor/Router.php");
}
$router=new Router();
$router->parseRequest();