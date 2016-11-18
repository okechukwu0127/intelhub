<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class check_controller extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
		
			
	}
	
	
	
	
	public function check()
	{
		$this->load->library('form_validation');
		//$this->load->database();
		$this->form_validation->set_error_delimiters('<span class="ui-state-error" style="padding:1px;"><img src="'.IMG.'report.png" width="10" style="margin-top:0px; margin-right:4px;float:left"/>', '</span>');
		
		 if($this->input->post('ajax'))
		  {
			  if($this->input->post('ajax')=='1')
			  {
			
		
		$this->session->set_userdata($this->input->post('handler'), $this->input->post($this->input->post('handler')));
			
				 if($this->input->post('fullname'))
		  		{
					
			$my_rules=$this->form_validation->set_rules('fullname','Fullname', 'required|trim|xss_clean|alpha_space|min_length[10]|max_length[20]');
					if($my_rules && !$this->form_validation->run() or $this->input->post('fullname')==='' )
					{
					$validate=0;	
					
					
					
					//$this->session->set_userdata('fullname', $this->input->post('fullname'));
					//echo $responce[0];
					//echo "-";
					}
					else
					{
					echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					//$this->session->set_userdata('fullname', $this->input->post('fullname'));
					$validate=1;	
					$error="";
					
					
					}
					
					//$responce=array($validate,form_error('fullname'));
					
				}
				
				else if($this->input->post('title'))
		  		{
					
			$my_rules=$this->form_validation->set_rules('title','Title', 'required|trim|xss_clean|min_length[5]|max_length[120]');
					if($my_rules && !$this->form_validation->run() or $this->input->post('title')==='' )
					{
					$validate=0;	
					
					
					
					//$this->session->set_userdata('fullname', $this->input->post('fullname'));
					//echo $responce[0];
					//echo "-";
					}
					else
					{
					echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					//$this->session->set_userdata('fullname', $this->input->post('fullname'));
					$validate=1;	
					$error="";
					
					
					}
					
					//$responce=array($validate,form_error('fullname'));
					
				}
				
				
				else if($this->input->post('phone'))
				{
					
					$my_rules=$this->form_validation->set_rules('phone', 'Phone', 'required|trim|xss_clean|numeric|min_length[11]|max_length[14]');
					if($my_rules && !$this->form_validation->run() or $this->input->post('phone')==='' )
					{
						//$this->session->set_userdata('phone', $this->input->post('phone'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('phone', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('phone'));
					
					//echo $responce[1];
					
					
				}
				
				
				
				else if($this->input->post('email_login'))
				{
					
//$my_rules=$this->form_validation->set_rules('email_login', 'Email', 'required|trim|xss_clean|valid_email|min_length[5]|max_length[44]|callback_check_email_login');

$my_rules=$this->form_validation->set_rules('email_login', 'Email', 'required|trim|xss_clean|valid_email|min_length[5]|max_length[44]');
					if($my_rules && !$this->form_validation->run() or $this->input->post('email_login')==='' )
					{
						//$this->session->set_userdata('email', $this->input->post('email'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('email', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('email'));
					
					//echo $responce[1];
					
					
				}
				
				
				else if($this->input->post('email'))
				{
					
$my_rules=$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|min_length[5]|max_length[44]|callback_check_email');
					if($my_rules && !$this->form_validation->run() or $this->input->post('email')==='' )
					{
						//$this->session->set_userdata('email', $this->input->post('email'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('email', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('email'));
					
					//echo $responce[1];
					
					
				}
				else if($this->input->post('sex'))
				{
					
					$my_rules=$this->form_validation->set_rules('sex', 'Sex', 'required|trim|xss_clean');
					if($my_rules && !$this->form_validation->run()  or $this->input->post('sex')==='' )
					{
						//$this->session->set_userdata('sex', $this->input->post('sex'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('sex', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('sex'));
					
					//echo $responce[1];
					
					
				}
				
				else if($this->input->post('password'))
				{
					
					$my_rules=$this->form_validation->set_rules('password', 'Password', 'required|trim|xss_clean|min_length[7]');
					if($my_rules && !$this->form_validation->run()  or $this->input->post('password')==='' )
					{
						//$this->session->set_userdata('sex', $this->input->post('sex'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('sex', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('sex'));
					
					//echo $responce[1];
					
					
				}
				else if($this->input->post('address'))
				{
					
					$my_rules=$this->form_validation->set_rules('address', 'Adress', 'required|trim|xss_clean|max_length[214]');
					if($my_rules && !$this->form_validation->run() or $this->input->post('address')==='' )
					{
						//$this->session->set_userdata('address', $this->input->post('address'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('address', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('address'));
					
					///echo $responce[1];
					
					
				}
				
				else if($this->input->post('content'))
				{
					
					$my_rules=$this->form_validation->set_rules('content', 'Content', 'required|trim|xss_clean|max_length[1214]');
					if($my_rules && !$this->form_validation->run() or $this->input->post('content')==='' )
					{
						//$this->session->set_userdata('address', $this->input->post('address'));
					$validate=0;	
					}
					else
					{
						//$this->session->set_userdata('address', '');
					$validate=1;	
					$error="";
						echo '<img src="'.IMG.'selected.png" width="9" style="margin-top:-9px;"/>';
					}
					
					//$responce=array($validate,form_error('address'));
					
					///echo $responce[1];
					
					
				}
				$responce=array($validate,form_error($this->input->post('handler')));
					
					
					echo $responce[1];	
				
				
				
			  }
			  else if( $this->input->post('ajax')=='save_login')
			  {
				$this->load->model('news_model');
				$this->load->helper('url');
				$check=$this->news_model->check_user_login_par($_SESSION['email_login'],$_SESSION['password']);  
				 
				 
				 if($check)
				 {
					 
					 $_SESSION['login']='yes';;
					 $_SESSION['login_name']=$_SESSION['email_login'];
					  ?>
                     <script>
					 document.location.href='../post'
					 </script>
                     <?php
					
						$data['title']="LOGIN WAS SUCCESSFULL";
						//$data['status']="saved";
						$this->load->view('templates/header', $data);
						$this->load->view('register', $data);
						
						$this->load->view('templates/footer'); 
				 }
				 else
				 {
					  $_SESSION['login']='no';;
					 ?>
                     <script>
					 alert('Invalid Email or Password')
					// document.location.href='login/error'
					 </script>
                     <?php
						
						/*
						$data['title']="LOGIN ERROR DETECTED";
							$data['status']="login_error";
						//$data['status']="saved";
						$this->load->view('templates/header', $data);
						$this->load->view('login', $data);
						//echo $this->input->post('email_login').'---'.$this->input->post('password').$_SESSION['password'];
						$this->load->view('templates/footer');  
						*/
				 }
			  }
			  
			  
			  
			  else if($this->input->post('ajax')=="save_login_post")
				{
				
				//$this->input->post('fullname_val')
				
				$this->load->model('news_model');
				$this->load->helper('url');
				$this->news_model->save_post();
																				
				
				$data['title']="CONTENT WAS POSTED SUCCESSFULL";
				$data['status']="saved";
				$this->load->view('templates/header', $data);
				$this->load->view('post', $data);
				$this->load->view('templates/footer');
				
				
				}
			  
				else if($this->input->post('ajax')=="save")
				{
				
				//$this->input->post('fullname_val')
				
				$this->load->model('news_model');
				$this->load->helper('url');
				$this->news_model->save_registration();
																				
				
				$data['title']="REGISTRATION WAS SUCCESSFULL";
				$data['status']="saved";
				$this->load->view('templates/header', $data);
				$this->load->view('register', $data);
				$this->load->view('templates/footer');
				
				
				}
				
				
				
			 
			 
			 }
		
		
	}
	
	
	public function check_email($email)
    {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');

        //query the database
        $email_exist = $this->news_model->check_email_exist($email);
		//echo $email_exist.'-----------';
        if ($email_exist == false)
        {
            return true;
        } else
        {
            $this->form_validation->set_message('check_email', 'This Email is already registered');
            return false;
        }
    }
	
	
	public function check_email_login($email)
    {
        //Field validation succeeded.  Validate against database
        $email = $this->input->post('check_email');

        //query the database
        $email_exist = $this->news_model->check_email_exist($email);
		//echo $email_exist.'-----------';
        if ($email_exist == false)
        {
           
			
			$this->form_validation->set_message('check_email', 'This Email is not registered with us');
            return false;
        } else
        {
             return true; 
        }
    }
	
}

?>