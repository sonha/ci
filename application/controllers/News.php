<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('News_model');
    }

	public function index()
	{
		$data['all_news'] = $this->News_model->get_all_news();
		$data['title'] = 'List News';
		$this->load->view('news/list_news', $data);
	}

	public function create() {
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $data['title'] =   'Create News';
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('content', 'Noi Dung', 'required|min_length[4]');
        $this->form_validation->set_rules('author', 'Tac Gia', 'required');

		if($this->form_validation->run() == FALSE) {
			// $this->load->view('news/create_news', $data);
			$this->load->view('layouts/part_top', $data);
			$this->load->view('news/create');
	    	$this->load->view('layouts/part_bottom');
		} else {
			// var_dump($_POST);die;
			$data = array(
                    'title' => $_POST['title'], 
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
            );

			$this->News_model->insert_data($data);
			redirect('/news/index', 'refresh');
		}
	}

	public function update($id) {
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $data['news_info'] = $this->News_model->getNewsById($id);
        // var_dump( $data['news_info']);die;
        $data['title'] =   'Update News';
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('content', 'Noi Dung', 'required|min_length[4]');
        $this->form_validation->set_rules('author', 'Tac Gia', 'required');

		if($this->form_validation->run() == FALSE) {
			// $this->load->view('news/create_news', $data);
			$this->load->view('layouts/part_top', $data);
			$this->load->view('news/update', $data);
	    	$this->load->view('layouts/part_bottom');
		} else {
			$data = array(
                    'title' => $_POST['title'], 
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
            );

			$this->News_model->update($id, $data);
			redirect('/news/index', 'refresh');
		}
	}

	public function view($id) {
		$data['news'] = $this->News_model->getNewsById($id);
		$this->load->view('news/detail', $data);
	}
	
}
