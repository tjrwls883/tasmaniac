<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->database();
		//$this->load->model('topic_model');
		//log_message('debug','topic �ʱ�ȭ');
		$this->load->helper('url');
	}


	public function index(){
		$this->load->view('main');
	}
	
	public function get($id){
		log_message('debug','get ȣ��');
		#$data = array('id'=>$id);
		#$this->load->database();
		#$this->load->model('topic_model');
		$topic = $this->topic_model->get($id);
		$data = $this->topic_model->gets();
		$this->load->view('list',array('topics'=>$data));
		log_message('debug','get view �ε�');
		log_message('info',var_export($topic,1));
		$this->load->view('get',array('topic'=>$topic));
		#$this->load->view('get',$data);
		log_message('debug','fotter view �ε�');
	}
}
?>