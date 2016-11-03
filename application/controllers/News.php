<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
        $this->load->model('News_model');
        $this->load->model('Category_model');
    }

	public function index()
	{
		$data['total_news'] = $this->News_model->getTotalNews();
		$this->load->library('pagination');
		$perpage	=  3; /* Số books hiển thị trên một page*/
		$config['total_rows']  =  $data['total_news'];
		$config['per_page']  =  $perpage;
		$config['num_links']	=  5;
		$config['use_page_numbers'] = TRUE;//LUU Y :  De hien thi trang chu ko phai offset

  		$config['full_tag_open'] = '<ul class="pagination">';
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
		$config['base_url'] =  base_url().'/news/';
		$config['uri_segment']	 =  2;
                # Khởi tạo phân trang
		$this->pagination->initialize($config); 
                # Tạo link phân trang
		$pagination =  $this->pagination->create_links();

		$offset  =  ($this->uri->segment(2)=='') ? 0 : $this->uri->segment(2); 
		// var_dump($offset );die;

		$data['all_news'] =  $this->News_model->getNews($perpage, $offset);
		$data['pagination'] = $pagination;
		$data['title'] = 'List News';
		$this->load->view('news/list_news', $data);
	}

	function to_slug($str) {
    $str = trim(mb_strtolower($str));
    $str = preg_replace('/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/', 'a', $str);
    $str = preg_replace('/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/', 'e', $str);
    $str = preg_replace('/(ì|í|ị|ỉ|ĩ)/', 'i', $str);
    $str = preg_replace('/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/', 'o', $str);
    $str = preg_replace('/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/', 'u', $str);
    $str = preg_replace('/(ỳ|ý|ỵ|ỷ|ỹ)/', 'y', $str);
    $str = preg_replace('/(đ)/', 'd', $str);
    $str = preg_replace('/[^a-z0-9-\s]/', '', $str);
    $str = preg_replace('/([\s]+)/', '-', $str);
    return $str;
	}

	public function category($id)
	{
		$data['all_news'] = $this->News_model->get_news_by_category($id);
		$data['all_category'] = $this->Category_model->getAll();
		// var_dump($data['all_category']);die;
		$data['title'] = 'List News';
		$this->load->view('news/category', $data);
	}


	public function create() {
		$this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $data['title'] =   'Create News';
        $this->form_validation->set_rules('title', 'Title', 'required|min_length[4]|max_length[100]');
        $this->form_validation->set_rules('content', 'Noi Dung', 'required|min_length[4]');
        $this->form_validation->set_rules('author', 'Tac Gia', 'required');
        $this->form_validation->set_rules('category_id', 'Chuyen muc', 'required');



		if($this->form_validation->run() == FALSE) {
			// $this->load->view('news/create_news', $data);
			$this->load->view('layouts/part_top', $data);
			$this->load->view('news/create');
	    	$this->load->view('layouts/part_bottom');
		} else {

		$config = array(
			'upload_path' => "./assets/uploads/",
			'allowed_types' => "gif|jpg|png|jpeg|pdf",
			'overwrite' => TRUE,
			'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			'max_height' => "768",
			'max_width' => "1024"
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();
			$data = array(
                    'title' => $_POST['title'], 
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
                    'category_id' => $_POST['category_id'],
            );


            $slug = $this->to_slug($_POST['title']);
            // var_dump( $slug);die;

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
