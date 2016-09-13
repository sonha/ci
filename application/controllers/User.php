<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('User_model');
    }

    function test() {
    	
    }

    function test2() {
    	$data['all_user'] = $this->User_model->getAll();
		$data['title'] = 'List User Page';
		// var_dump($data['all_user']);die;
    	// $this->load->view('layouts/layout_top');
    	$this->load->view('user/list_user2', $data);
    	// $this->load->view('layouts/layout_bottom');
    }


	public function index()
	{
		$data['all_user'] = $this->User_model->get_all_user();

		$data['title'] = 'List Sinh vien';
		$this->load->view('user/list_user', $data);
	}

	public function list_user() {
		$data['all_user'] = $this->User_model->getAll();
		$data['title'] = 'List User Page';
		$this->load->view('user/list_user', $data);
	}

	public function delete($id) {
		$this->User_model->deleteUser($id);
		redirect('/user/list_user', 'refresh');
	}

	public function hello()
	{
		$this->load->view('hello');
	}

	public function login() {
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'User Name', 'required|valid_email|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');
        $this->form_validation->set_rules('password', 'Mat khau', 'required|min_length[4]|max_length[12]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/login');
		} else {
			$username = $_POST["username"];
			$password = $_POST["password"];
			if($username == 'cuong@gmail.com' && $password == '123456') {
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password ;
				redirect('/user/index', 'refresh');
			} else {
				$this->load->view('user/login');
			}
		}
	}

	public function register() {
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'User Name', 'required|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');
        $this->form_validation->set_rules('password', 'Mat khau', 'required|min_length[8]|max_length[12]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/create_user');
		} else {
			$data = array(
                    'username' => $_POST['username'], // $_POST['username']
                    'email' => $_POST['email'],
                    'age' => $_POST['age'],
                    'password' => $this->input->post('password'),
            );

			$this->User_model->insert_data($data);
			redirect('/user/list_user', 'refresh');
		}
	}

	public function update($user_id) {
		$data['user_info'] = $this->User_model->getUserById($user_id);
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'User Name', 'required|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|min_length[4]|max_length[25]');
        $this->form_validation->set_rules('age', 'Age', 'required|numeric');
        $this->form_validation->set_rules('password', 'Mat khau', 'required|min_length[8]|max_length[12]');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('user/update_user', $data);
		} else {
			$this->User_model->update_user($user_id);
			redirect('/user/list_user', 'refresh');
		}
	}
}