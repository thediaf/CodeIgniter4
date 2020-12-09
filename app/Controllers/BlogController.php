<?php namespace App\Controllers;

use App\Models\BlogModel;
use CodeIgniter\Config\Config;

class BlogController extends BaseController
{
    public function show($slug)
    {
        $model = new BlogModel();

        $data['article'] = $model->getArticle($slug);

        echo view('template/header', $data);
        echo view('Articles/show');
        echo view('template/footer');
    }

    public function create()
    {
        helper('form');
        $model = new BlogModel();

        if (! $this->validate([
                    'title' => 'required|min_length[3]|max_length[255]',
                    'content' => 'required'
                    ])) 
        {
            
            echo view('template/header');
            echo view('Articles/create');
            echo view('template/footer');
        }
        else
        {
            $model->save([
                'title'     =>  $this->request->getVar('title'),
                'content'   =>  $this->request->getVar('content'),
                'slug'      =>  url_title($this->request->getVar('title'), '-', TRUE)
            ]);

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'New post was created !');

            return redirect()->to('/');
        }
    }
}