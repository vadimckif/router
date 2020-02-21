<?php
class ProductController
{
	public function index()
	{
		debug($_GET);
		echo "eto indexproduct";
	}
	public function create()
	{
		debug($_GET);
		echo "eto createproduct";
	}
	public function edit()
	{
		debug($_GET);
		echo "eto editproduct";
	}
}