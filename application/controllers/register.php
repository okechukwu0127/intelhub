<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Register extends CI_Controller
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
			$data['title']="REGISTER WITH US";
			$data['status']="add_record";
			$this->load->view('templates/header', $data);
			$this->load->view('register', $data);
			$this->load->view('templates/footer');
			
			
			
		}
	
	
	
}