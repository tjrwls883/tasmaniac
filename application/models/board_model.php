<?php 
class Board_model extends CI_Model {
	#생성자
	function __construct(){
		parent::__construct();
	}
	
	/*
	public function gets(){
		return $this->db->query("SELECT * FROM topic")->result(); #객체
		#return $this->db->query("SELECT * FROM topic")->result_array(); #Array
	}
	*/
	
	public function get($board_id){
		return $this->db->get_where('board',array('board_id'=>$board_id))->row(); 
	}
	
	
	public function gets($offset,$limit){
		return $this->db->query("SELECT * FROM board ORDER BY board_id DESC LIMIT ".$offset.", ".$limit)->result();
	}
	
	public function count(){
		$query = $this->db->query("SELECT * FROM board");
		return $query->num_rows();
	}
	
	public function add($user_id, $title, $password, $contents){
		$this->db->set('reg_dt','NOW()',false);
		$this->db->insert('board',array('user_id'=>$user_id,'title'=>$title,'password'=>$password,'contents'=>$contents));
		return 'success';
		//$this->db->insert_id(); //추가된행에대한 아이디
		//echo $this->db->last_query(); //쿼리문출력
	}
}
?>