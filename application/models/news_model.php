<?php
class News_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	
	
	public function check_user_login_par($email,$password)
	{
	 $query=$this->db->get_where('register',array('email'=>$email,'password'=>$password));
	return $query->row_array();		
		
	}
	
	public function check_email_exist($email)
	{
	$query=$this->db->get_where('register',array('email'=>$email));
	return $query->row_array();	
		
	}
	
	public function view_all_registrations($id = FALSE)
	{
		
		if($id===FALSE)
		{
			$query=$this->db->get('register');
			
			return $query->result_array();
			
		}
		
		$query=$this->db->get_where("register",array('id'=>$id));
		if($query->num_rows() >0)
				{
				return $query->row_array();
				}
				else
				{
				return "";	
				}
		
		
	}
	
	public function save_post()
	{
		
		$data = array(
			'title' => $this->input->post('title_val'),
		    'email' =>$_SESSION['login_name'],
				'content' => $this->input->post('content_val'),
				'date_time' => date('D-M-Y')
					
							//'address' => $this->input->post('address_val')
						);
						
			$this->session->unset_userdata('title');
			$this->session->unset_userdata('content');
			
			
					
		 return $this->db->insert('bolu_post', $data);
		
	}
	
	public function save_registration()
	{
		
		
		$data = array(
			'fullname' => $this->input->post('fullname_val'),
				'phone' => $this->input->post('phone_val'),
					'email' => $this->input->post('email_val'),
						'password' => $this->input->post('password_val')
							//'address' => $this->input->post('address_val')
						);
			
			
			$this->session->unset_userdata('fullname');
			$this->session->unset_userdata('phone');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('password');
			//$this->session->unset_userdata('address');	
			
					
		 return $this->db->insert('register', $data);
		 
		 
		
		
	}
	
	
	
	
	public function delete_news($id=FALSE)
	{
			
			
			$this->db->select('id,title');
			$this->db->from('news');
			$this->db->where('id',$id);
			$query=$this->db->get();
			$counter=$query->num_rows();
			
			//return $counter;
			
			if($counter > 0)
			{
				
			
			
			//$query=$this->db->get_where('news',array('id'=>$id));
			
			//$query_delete=$this->db->delete('news',array('id'=>$id));	
			return $query->row_array();	
			
			}
			else
			{
			return "";	
				
			}
			/* */
			
			
				
	}
	
	public function get_news($slug=FALSE)
	{
			
			if($slug === FALSE)
			{
				$query=$this->db->get("bolu_post");	
				return $query->result_array();
			}
			
			$query=$this->db->get_where('bolu_post',array('slug'=>$slug));
			return $query->row_array();
				
	}
	
	
	public function get_news_edit($slug=FALSE)
	{
		
		
		
			if($slug === FALSE)
			{
				$query=$this->db->get("news");	
				return $query->result_array();
				//return "";
			}
			
			$query=$this->db->get_where('news',array('id'=>$slug));
			return $query->row_array();
			
			
		
	}
	
	
	
	
	public function set_news()
	{
		
		$this->load->helper('url');
	
		$slug = url_title($this->input->post('news_body'), 'dash', TRUE);
		
		$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('news_body')
						);
						
		 return $this->db->insert('news', $data);
		
		
		
	}
	
	public function set_news_update()
	{
		$this->load->helper('url');
		$slug = url_title($this->input->post('news_body'), 'dash', TRUE);
		
		$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('news_body')
						);
						
		 //return $this->db->update('news', $data);
		 $this->db->where('id',$this->input->post('id_hidden'));	
		 return $this->db->update('news',$data);			
		
		
		
		
	}
	
	
	function login_model($user,$pass)
	{
		
		
			$query=$this->db->get_where('register',array('email'=>$user,'phone'=>$this->input->post('pass')));
			
			if($query->num_rows()>0)
			{ 
			return $query->result();
			} 
			else{return false;}
			//return $query->result();
	}
	
	
}