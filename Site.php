<?php 
class SiteController
{
	public function index()
	{
		debug($_GET);
		echo "eto index";
	}
	public function contact()
	{
		debug($_GET);
		echo "eto contakti";
	}
}