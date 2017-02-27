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
		
		$page = $this->uri->segment(3,1);
		
		if ($page > 1){
			$start = (($page/$config['per_page'])) * $config['per_page'];
		}
		else{
			$start = ($page-1) * $config['per_page'];
		}
		
		$limit = $config['per_page'];
		
		$data['list'] = $this->board_model->gets($start, $limit);
		$this->load->view('layouts/header');
		$this->load->view('board/list', $data);
		$this->load->view('layouts/footer');
		
	}
	
	public function board_read(){
		
		$board_id = $this->uri->segment(3,1);
		
		$data = $this->board_model->get($board_id);
		
		$this->load->view('layouts/header');
		$this->load->view('board/read',array('data'=>$data));
		$this->load->view('layouts/footer');
		
	}
	
	public function board_write(){
		
		$this->load->view('layouts/header');
		$this->load->view('board/write');
		$this->load->view('layouts/footer');
		
	}
	
	public function add(){
		
		$user_id = $this->input->post("user_id", TRUE);
		$title = $this->input->post("title", TRUE);
		$password = $this->input->post("password", TRUE);
		$contents = $this->input->post("contents", TRUE);

		$this->board_model->add($user_id,  $title, $password, $contents);
		
		$this->load->view('layouts/header');
		$this->load->view('board/list');
		$this->load->view('layouts/footer');
	
	}
	
	function upload_image(){
		//$this->yield = false;
		// 사용자가 업로드 한 파일을 /static/user/ 디렉토리에 저장한다.
		$config['upload_path'] = './web/upload/board_img';
		// git,jpg,png 파일만 업로드를 허용한다.
		$config['allowed_types'] = 'gif|jpg|png';
		// 허용되는 파일의 최대 사이즈
		$config['max_size'] = '10000';
		// 이미지인 경우 허용되는 최대 폭
		$config['max_width']  = '5000';
		// 이미지인 경우 허용되는 최대 높이
		$config['max_height']  = '5000';
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload("upload"))
		{
			//$error = array('error' => $this->upload->display_errors());
			//echo $this->upload->display_errors();
			echo "<script>alert('업로드에 실패 했습니다. ".$this->upload->display_errors('','')."')</script>";
			//$this->load->view('upload_form', $error);
		}
		else
		{
			//$data = array('upload_data' => $this->upload->data());
			$data = $this->upload->data();
			$filename = $data['file_name'];
			$url = '../../web/upload/board_img/'.$filename;
			$CkeditorFuncNum = $this->input->get("CKEditorFuncNum");
			echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction('".$CkeditorFuncNum."', '".$url."', '전송에 성공했습니다')</script>";
			//echo "성공";
			//var_dump($data);
			//$this->load->view('upload_success', $data);
		}
	
	}
	
}
?>