<?php 
class User_model extends CI_Model {
	#������
	function __construct(){
		parent::__construct();
	}
	
	public function get($user_id){
		return $this->db->get_where('user',array('user_id'=>$user_id))->row();
	}
	
	public function add($user_id, $user_nm, $hash_pw, $email){
		$this->db->set('join_dt','NOW()',false);
		$this->db->insert('user',array('user_id'=>$user_id,'user_nm'=>$user_nm,'user_pw'=>$hash_pw,'email'=>$email));
		return 'success';
		//$this->db->insert_id(); //�߰����࿡���� ���̵�
		//echo $this->db->last_query(); //���������
	}
}
?>