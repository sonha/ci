<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('News_model');
    } 

	// public function index()
	// {
	// 	$this->load->view('index');
	// }

	public function index()
	{

    	$keyword = isset($_POST['search_name']) ? $_POST['search_name'] : '';
		$data['total_news'] = $this->News_model->getTotalNews($keyword);
		$data['popular'] = $this->News_model->getPopularPost();
		$this->load->library('pagination');
		$perpage	=  10; /* Số books hiển thị trên một page*/
		$config['total_rows']  =  $data['total_news'];
		$config['per_page']  =  $perpage;
		$config['num_links']	=  5;
		$config['use_page_numbers'] = TRUE;//LUU Y :  De hien thi trang chu ko phai offset

  		$config['full_tag_open'] = '<ul>';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$config['base_url'] =  base_url().'/home/';
		$config['uri_segment']	 =  2;

		// if(isset($_POST['submit'])) {
  //       	var_dump($_POST);die;
  //   	}



                # Khởi tạo phân trang
		$this->pagination->initialize($config); 
                # Tạo link phân trang
		$pagination =  $this->pagination->create_links();

		// $offset  =  ($this->uri->segment(2)=='') ? 0 : $this->uri->segment(2); 
		if($this->uri->segment(3)) {
          $offset = ($this->uri->segment(3)-1)*$perpage;
		} else {
          $offset = 0;
      	}

		$data['all_news'] =  $this->News_model->getNews($perpage, $offset, $keyword);
		// var_dump($data['all_news'] );die;
		// var_dump($data['all_news'] );die;
		$data['pagination'] = $pagination;
		$data['title'] = 'List News';
		$this->load->view('frontend/news/new_paging', $data);
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
