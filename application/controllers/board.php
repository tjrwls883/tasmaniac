<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Board extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->database();
		$this->load->model('board_model');
		$this->load->helper('url');
	}

	public function board_list(){
		
		$this->load->library('pagination');
		$config['base_url'] = "http://localhost/tasmaniac/index.php/board/board_list/";
		$config['total_rows'] = $this->board_model->count();
		$config['per_page'] = 20;
		$config['uri_segment'] = 3;
		
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		
		$page = $this->uri->segment(4,1);
		$type = $this->uri->segment(3,1);
		
		if ($page > 1){
			$start = (($page/$config['per_page'])) * $config['per_page'];
		}
		else{
			$start = ($page-1) * $config['per_page'];
		}
		
		$limit = $config['per_page'];
		
		$data['list'] = $this->board_model->gets($start, $limit, $type);
		$this->load->view('board/list', $data);
		
	}
	
	public function board_read(){
		echo $this->uri->segment(4,1);
		$board_id = $this->uri->segment(4,1);
		$data = $this->board_model->get($board_id);
		$this->load->view('board/read',array('data'=>$data));
		
	}
	
	public function board_write(){
	
		if(@$this->session->userdata('logged_in')==TRUE){
			$this->load->view('board/write');
		}else{
			$this->load->view('main');
		}
		
	}
	
	public function add(){
		
		$this->yield = false;
		$this->load->helper('url');
		$title = $this->input->post("title", TRUE);
		$type = $this->input->post("type", TRUE);
		$contents = $this->input->post("contents", TRUE);
		$user_id = $this->input->post("user_id", TRUE);
		$user_nm = $this->input->post("user_nm", TRUE);
			
		$this->board_model->add($title, $type, $contents, $user_id, $user_nm);
		redirect(get_instance()->common->getUrlReturn()."index.php/board/board_list/".$type);
			
	}
	
	function upload_image(){
		
		$this->yield = false;
		// ����ڰ� ���ε� �� ������ /static/user/ ���丮�� �����Ѵ�.
		$config['upload_path'] = './web/upload/board_img';
		// git,jpg,png ���ϸ� ���ε带 ����Ѵ�.
		$config['allowed_types'] = 'gif|jpg|png';
		// ���Ǵ� ������ �ִ� ������
		$config['max_size'] = '10000';
		// �̹����� ��� ���Ǵ� �ִ� ��
		$config['max_width']  = '5000';
		// �̹����� ��� ���Ǵ� �ִ� ����
		$config['max_height']  = '5000';
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload("upload"))
		{
			//$error = array('error' => $this->upload->display_errors());
			//echo $this->upload->display_errors();
			echo "<script>alert('���ε忡 ���� �߽��ϴ�. ".$this->upload->display_errors('','')."')</script>";
			//$this->load->view('upload_form', $error);
		}
		else
		{
			//$data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$url = '../../web/upload/board_img/'.$filename;
			$CkeditorFuncNum = $this->input->get("CKEditorFuncNum");
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CkeditorFuncNum."', '".$url."', '���ۿ� �����߽��ϴ�')</script>";
			//echo "����";
			//var_dump($data);
			//$this->load->view('upload_success', $data);
		}
	
	}
	
}
?>