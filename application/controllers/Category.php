<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('Category_model');
    }

    function index()  {
    	$data['title'] = 'List Category';
    	$data['list_category'] = $this->Category_model->getAll();
    	$this->load->view('layouts/part_top', $data);
    	$this->load->view('category/index', $data);
    	$this->load->view('layouts/part_bottom');
    }

    function create() {
    	$data['title'] = 'Create Category';
    	$data['action'] ='create';
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('category_name', 'Category Name', 'required|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[4]');
        if($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/part_top', $data);
			$this->load->view('category/create');
	    	$this->load->view('layouts/part_bottom');
		} else {
			$data = array(
                    'category_name' => $_POST['category_name'],
                    'description' => $_POST['description']
            );

			$this->Category_model->insert_data($data);
			redirect('/category/index', 'refresh');
		}
    }

    function update($id) {
    	$data['title'] = 'Create Category';
    	$data['category_id'] =$id;
    	$data['category_info'] = $this->Category_model->getCategoryById($id);
    	// var_dump($data['category_info'] );die;
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('category_name', 'Category Name', 'required|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('description', 'Description', 'required|min_length[4]');
        if($this->form_validation->run() == FALSE) {
			$this->load->view('layouts/part_top', $data);
			$this->load->view('category/update');
	    	$this->load->view('layouts/part_bottom');
		} else {
			$data = array(
                    'category_name' => $_POST['category_name'],
                    'description' => $_POST['description']
            );

			$this->Category_model->update($id, $data);
			redirect('/category/index', 'refresh');
		}
    }
}
