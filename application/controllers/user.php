<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('user_model');
		$this->load->helper('url');
	}

	public function user_login(){
		$this->load->view('user/login');
	}
	
	public function user_join(){
		$this->load->view('user/join');
	}
	
	public function add(){
		
		$user_id = $this->input->post("user_id", TRUE);
		$user_pw = $this->input->post("user_pw", TRUE);
		$hash_pw = password_hash($user_pw, PASSWORD_BCRYPT);
		$user_nm = $this->input->post("user_nm", TRUE);
		$email = $this->input->post("email", TRUE);
		
		$this->user_model->add($user_id, $user_nm, $hash_pw, $email);
		$this->load->view('main');
		//redirect(base_url().index_page()."/main");
		
	}
	
	public function test(){
		
		echo password_hash("abcd", PASSWORD_BCRYPT);
	}
	
	public function login(){

		$user_id = $this->input->post('user_id',TRUE);
		$user_pw = $this->input->post('user_pw',TRUE);
		
		$data = $this->user_model->get($user_id);
		
		if($data==null){
			$this->load->view('user/login');
		}else{
			if(password_verify($user_pw,$data->user_pw)){
				
				$logindata = array(
						'user_id' => $data->user_id,
						'user_nm' => $data->user_nm,
						'logged_in' => TRUE
				);
				$this->session->set_userdata($logindata);
				$this->load->view('main');
				
			}else{
				$this->load->view('user/login');
			}
		}
		
	}
	
	public function logout(){
		
		$this->session->sess_destroy();
		$this->load->view('main');
		//redirect(base_url().index_page()."/main");
		
	}
	
}
?>