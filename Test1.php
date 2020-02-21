<?php 
class Test1Controller
{
	public function index()
	{
		debug($_GET);
		echo "eto test1";
	}
	public function contact()
	{
		debug($_GET);
		echo "eto contaktitest";
	}
}