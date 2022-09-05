<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function login($email, $password){
			$query = $this->db->get_where('users', array('user_email'=>$email, 'user_password'=>md5($password)));
			
				return $query->row_array();
		
			
		}
		
		public function loginerrors($email, $password)
						
		{
			$res =$this->db->get_where('users', array('user_email'=>$email));
			$res1 =$this->db->get_where('users', array('user_password'=>md5($password)));

			if($res->num_rows() > 0 || $res1->num_rows() > 0)
			{

				return TRUE;
				
			}
			else
			{
				return FALSE;
			}
		}

		public function register($data)
		{
			$email_address = $data['user_email'];
			$this->db->where('user_email', $email_address);
			$result = $this->db->get('users');

			
 			if($result->num_rows() >0)
			{
				return false;
			}

			else
			{
				$this->db->insert('users',$data);
				return true;
			} 	 

	
		}

	
		public function update($fetch)
		{
			$name = $fetch['user_name'];
			$phone = $fetch['user_phone'];
			$email = $fetch['user_email'];
			$age = $fetch['user_age'];
			$password = $fetch['user_password'];

			$this->db->query("UPDATE users SET user_name = '$name', user_phone = '$phone', user_email = '$email',user_age = '$age', user_password = '$password' WHERE users.user_email = '$email'");
			$query = $this->db->get_where('users', array('user_email'=>$email));
			
			return $query->row_array();
		}

		public function delete()
		{
			$user = $this->session->userdata('user');
			extract($user);
	
			$this->db->delete('users', array('user_email' =>$user_email));
			return true;
		}

	}
?>