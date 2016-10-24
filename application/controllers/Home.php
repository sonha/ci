<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('News_model');
    } 

	public function index()
	{
		$this->load->view('index');
	}

	public function news() {
		$data['all_new'] = $this->News_model->get_all_news();
		$data['popular'] = $this->News_model->getPopularPost();
		$this->load->view('frontend/news/list_new', $data);
	}

	public function view($id) {
		// var_dump($id);die;
		$this->News_model->increase_hit($id);
		$data['news'] = $this->News_model->getNewsById($id);
		$data['popular'] = $this->News_model->getPopularPost();

		// var_dump($data['popular'] );die;
		$this->load->view('frontend/news/view', $data);
	}
}
