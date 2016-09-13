<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('hello');
	}

	public function create()
	{
		$this->load->view('create');
	}

	public function all()
	{
		$this->load->view('list');
	}
}
