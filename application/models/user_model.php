<?php 
class User_model extends CI_Model {
	#생성자
	function __construct(){
		parent::__construct();
	}
	
	public function gets(){
		return $this->db->query("SELECT * FROM topic")->result(); #객체
		#return $this->db->query("SELECT * FROM topic")->result_array(); #Array
	}
	
	public function get($topic_id){
		return $this->db->get_where('topic',array('id'=>$topic_id))->row(); 
	}
	
	public function add($user_id, $user_nm, $user_pw, $email){
		$this->db->set('join_dt','NOW()',false);
		$this->db->insert('user',array('user_id'=>$user_id,'user_nm'=>$user_nm,'user_pw'=>$user_pw,'email'=>$email));
		return 'success';
		//$this->db->insert_id(); //추가된행에대한 아이디
		//echo $this->db->last_query(); //쿼리문출력
	}
}
?>