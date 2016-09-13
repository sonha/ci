<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('User_model');
    }

    function index() {
    	$data['all_user'] = $this->User_model->getAll();
    	$this->load->view('layouts/part_top', $data);
    	$this->load->view('admin/index', $data);
    	$this->load->view('layouts/part_bottom', $data);
    }

    function test() {
    	$this->load->view('layouts/part_top');
    	$this->load->view('admin/test');
    	$this->load->view('layouts/part_bottom');
    }
}
