<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Fenye_model extends CI_Model{
		public function getall(){
			$query=$this->db->get('t_blogs');
			return $query->result();
		}
		
		public function countall(){
			$allnum=$this->db->count_all_results('t_blogs');
			//var_dump($allnum);
			return $allnum;
		}
		public function fennum($per_page,$page){
			//$pageindex=($page-1)*$per_page;
			//$pageindex=$page*$per_page;
			//$sql="select * from t_blogs limit $pageindex,$per_page";
			//echo $sql;
			//die();
			$sql="select * from t_blogs limit $page,$per_page";
			$query=$this->db->query($sql);
			//$query = $this->db->get('t_blogs', $per_page, (($page-1)*$per_page));
			return $query->result();
		}	
		
	}

?>