<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tour extends CI_Controller {

	function __construct(){
		parent::__construct();

		//$this->load->database();
		//$this->load->model('topic_model');
		//log_message('debug','topic �ʱ�ȭ');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('tour/tour');
	}
	
}
?>