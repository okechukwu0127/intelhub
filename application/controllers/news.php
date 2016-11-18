<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class News extends CI_Controller
{
	
	
	public function __construct()
    {

        parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
        //$this->load->helper('user_control');
       // $this->load->library(array('form_validation', 'encrypt'));
        $this->load->model('news_model');
		
       // $this->check_iflogged_in();
    }
	
	 public function index()
		{
			
			$news=$this->news_model->get_news();
			
			$data['title']="BLOG CONTENT";
			$data['status']="blog_data";
			$data['news']=$news;
			$this->load->view('templates/header', $data);
			$this->load->view('news', $data);
			$this->load->view('templates/footer');
			
			
			
		}
	
	
	
}