<?php namespace App\Controllers;

use App\Models\BlogModel;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	public function showme($page = 'index')
	{
		$model = new BlogModel();
		$data['articles'] =  $model->getPosts();
		
		echo view('template/header.php', $data);
		echo view('pages/'. $page . '.php');
		echo view('template/footer.php');
	}

	//--------------------------------------------------------------------

}
