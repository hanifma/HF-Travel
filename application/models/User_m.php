<?php
	/**
	* 
	*/
	class User_m extends CI_Model
	{
		
		function gets(){
			return $this->db->get('user')->result();
		}
		function get($data){
			
		}
		public function add($data){
			$this->db->insert('user',$data);
		}
		
		function del($id){
			$this->db->delete('user',['id'=>$id]);
		}
		function edit($data){
		 
		}
		
		
	}
?>