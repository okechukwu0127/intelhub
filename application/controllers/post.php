<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Post extends CI_Controller
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
			
			if(isset($_SESSION['login']))
			{
				if($_SESSION['login']=='yes')
				{
					
					
					$data['title']="POST YOUR NEWS";
					$data['status']="add_record";
					$this->load->view('templates/header', $data);
					$this->load->view('post', $data);
					$this->load->view('templates/footer');
					
				}
				
				
			}
			else
			{
				
				$data['title']="REGISTERED USERS LOGIN";
			$data['status']="add_record_login";
			$this->load->view('templates/header', $data);
			$this->load->view('login', $data);
			$this->load->view('templates/footer');
			
			
			}
			
			
			
		}
	
	
	
}