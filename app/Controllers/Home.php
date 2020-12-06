<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function showme($page = 'index')
	{
		// echo 'hdjhfch';
		echo view('template/header.php');
		echo view('pages/'. $page . '.php');
		echo view('template/footer.php');
	}

	//--------------------------------------------------------------------

}
