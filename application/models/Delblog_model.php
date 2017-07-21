<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Delblog_model extends CI_Model{

		public function del($id){
			$sql="delete from t_blogs where BLOG_ID='$id'";
			// $query=$this->db->delete('t_blogs', array('BLOG_ID' => '$id'));
			$query=$this->db->query($sql);
			// $result=$query->row();
			return $query;
		}


	}

?>