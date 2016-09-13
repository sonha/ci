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

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('content', 'Noi Dung', 'required|min_length[4]');
        $this->form_validation->set_rules('author', 'Tac Gia', 'required');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('news/create_news');
		} else {
			$data = array(
                    'title' => $_POST['title'], 
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
            );

			$this->News_model->insert_data($data);
			redirect('/news/index', 'refresh');
		}
	}

	public function view($id) {
		$data['news'] = $this->News_model->getNewsById($id);
		$this->load->view('news/detail', $data);
	}
	
}
