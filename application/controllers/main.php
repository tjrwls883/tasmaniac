<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->database();
		//$this->load->model('topic_model');
		//log_message('debug','topic 초기화');
		$this->load->helper('url');
	}


	public function index(){
		$this->load->view('main');
	}
	
	public function get($id){
		log_message('debug','get 호출');
		#$data = array('id'=>$id);
		#$this->load->database();
		#$this->load->model('topic_model');
		$topic = $this->topic_model->get($id);
		$data = $this->topic_model->gets();
		$this->load->view('list',array('topics'=>$data));
		log_message('debug','get view 로딩');
		log_message('info',var_export($topic,1));
		$this->load->view('get',array('topic'=>$topic));
		#$this->load->view('get',$data);
		log_message('debug','fotter view 로딩');
	}
}
?>