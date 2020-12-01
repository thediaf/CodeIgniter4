<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function showme($page = 'home')
	{
		// echo 'hdjhfch';
		echo view('template/header.php');
		echo view('pages/index.php');
		echo view('template/footer.php');
	}

	//--------------------------------------------------------------------

}
