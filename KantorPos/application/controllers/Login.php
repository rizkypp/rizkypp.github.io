<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('loginModel');
	}

	public function index(){
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		if($this->form_validation->run() == false){
		$this->load->view('login');	
		} else {
			$this->_login();
		}
		
	}

	private function _login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['username' => $username])->row_array();

		if($user){
			if(password_verify($password,$user['password'])){
				$data = [
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				redirect('welcome');
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong password!</div>');
				redirect('login');
			}
		}
	}

	public function registeration(){
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password1]',[
			'matches'=>'Password dont match!',
			'min_length'=>'Password too short!'
		]);
		$this->form_validation->set_rules('password1', 'Password1','required|trim|matches[password]');
		
		if($this->form_validation->run() == false){
			$this->load->view('register');
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>'); 
			redirect('login');			

		}
	}
}










