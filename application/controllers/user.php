<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('user_model');
	}

	public function test(){
		$this->load->view('user/test');
	}
	
	public function test2(){
		echo '<meta http-equive="Content-Type" content="text/html; charset=utf-8" />';
		$name = $this->input->post("name");
		echo $name."님 반갑습니다!";
	}
	
	public function user_join(){
		
		$this->yield = false;
		$user_id = $this->input->post("user_id", TRUE);
		$user_pw = $this->input->post("user_pw", TRUE);
		$user_nm = $this->input->post("user_nm", TRUE);
		$email = $this->input->post("email", TRUE);
		
		$this->user_model->add($user_id, $user_pw, $user_nm, $email);
		
		echo $user_id." ".$user_pw." ".$user_nm." ".$email;
		
	}
	
	public function user_login(){
		
		$this->yield = false;
		$user_id = $this->input->post('user_id',TRUE);
		
		$newdata = array(
				'user_id' => $user_id,
				'logged_in' => TRUE
		);
		
		$this->session->set_userdata($newdata);
		
		echo "성공";
		
	}
	
	public function user_logout(){
		
		$this->yield = false;
		$this->session->sess_destroy();
		echo "로그아웃성공";
		exit;
		
	}
	
}
?>