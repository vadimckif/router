<?php
class AuthController
{
	public function index()
	{
		debug($_GET);
		echo "eto indexauth";
	}
	public function creat()
	{
		debug($_GET);
		echo "eto create-token";
	}
}