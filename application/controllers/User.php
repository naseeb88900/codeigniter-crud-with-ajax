<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
 
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('users_model');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
 
	public function index(){
			$this->load->view('login_page');
	}

	

	public function login(){
		$email = $_POST['email'] ?? null;
		$password = $_POST['password'] ?? null;
 
		$data = $this->users_model->login($email, $password);
 
		if($email == NULL && $password == NULL){
			$response['message'] = "<div class='alert alert-success'>Required Fields are empty</div>";
			$response['status'] = -2;
			
			
		}
		elseif($data){
			$this->session->set_userdata('user', $data);
			$response['status'] = 0;
			
		}
		elseif($this->users_model->loginerrors($email, $password)){
			$response['message'] = "<div class='alert alert-success'>Invalid Username or Password</div>";
			$response['status'] = 1;
			
		}
		else{
			$response['message'] = "<div class='alert alert-success'>Record Doesn't exist in database</div>";
			$response['status'] = -1;
		}
		echo json_encode($response);
		
	}


	public function register()
	{
		$this->load->view('registration');
	}

	public function register_process()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('repass', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('age', 'Age', 'required');


		if($this->form_validation->run() == true)
		{
			$data['user_name']=$this->input->post('name');
			$data['user_phone']=$this->input->post('phone');
			$data['user_email']=$this->input->post('email');
			$data['user_age']=$this->input->post('age');
			$data['user_password']=md5($this->input->post('password'));
			$repass = $this->input->post('repass');

			

			if($data['user_password'] != md5($repass))
			{
				$response['status'] = -2;
				$response['message'] = "<div class='alert alert-success'>Passwords Don't match</div>";
			}
			elseif($this->users_model->register($data))
			{
				$response['status'] = 1;
				$response['message'] = "<div class='alert alert-success'>Record has been saved successfully</div>";
				$response['msg'] = "<div class='alert alert-success'>Enter a valid email address</div>";
			}
	
			else{
				$response['status'] = -1;
				$response['message'] = "<div class='alert alert-success'>Email already exist in database</div>";
			}
			
		}

		else{
			$response['status'] = 0;
			$response['name'] = strip_tags(form_error('name'));
			$response['phone'] = strip_tags(form_error('phone'));
			$response['password'] = strip_tags(form_error('password'));
			$response['repass'] = strip_tags(form_error('repass'));
			$response['email'] = strip_tags(form_error('email'));
			$response['age'] = strip_tags(form_error('age'));
			
		}

		echo json_encode($response);
	}


	public function delete()
	{	
			$this->users_model->delete();
			$response['msg'] = 'Record has been deleted successfully';
			$response['status'] = 1;
			echo json_encode($response);
	}

	public function update()
	{
		if(!$this->session->userdata('user'))
		{
			redirect('user/index');
		}
		$html = $this->load->view('update',' ', true);
		$response['html'] = $html;
		echo json_encode($response);
	}

	public function update_process()
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('repass', 'Password Confirmation', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('age', 'Age', 'required');


		if($this->form_validation->run() == true)
		{
			
			$fetch['user_name']=$this->input->post('name');
			$fetch['user_phone']=$this->input->post('phone');
			$fetch['user_email']=$this->input->post('email');
			$fetch['user_age']=$this->input->post('age');
			$fetch['user_password']=md5($this->input->post('password'));
			$repass = $this->input->post('repass');

			if($fetch['user_password'] != md5($repass))
			{
				$response['status'] = -2;
				$response['message'] = "<div class='alert alert-danger'>Passwords Don't match</div>";
			}
			elseif($row = $this->users_model->update($fetch))
			{
				$response['row'] = $row ;
				$this->session->unset_userdata('user');
				$this->session->set_userdata('user', $row);
				$response['status'] = 1;
				$response['message'] = "<div class='alert alert-success'>Record has been updated successfully</div>";
			}
			
		}

		else{
			$response['status'] = 0;
			$response['name'] = strip_tags(form_error('name'));
			$response['phone'] = strip_tags(form_error('phone'));
			$response['password'] = strip_tags(form_error('password'));
			$response['repass'] = strip_tags(form_error('repass'));
			$response['email'] = strip_tags(form_error('email'));
			$response['age'] = strip_tags(form_error('age'));
			
		}

		echo json_encode($response);
	
	}



	public function dashboard()
	{
		
		if($this->session->userdata('user')){
			$this->load->view('dashboard');
		}
		else{
			redirect('/');
		}
 
	}
 
	public function logout(){
		$this->session->unset_userdata('user');
		$this->session->sess_destroy();
		redirect('/');
	}
 
}