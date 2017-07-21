<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Comment_model extends CI_Model{

		public function comment($id,$bid){
			$arr=array(
				'BLOG_ID'=>$id,
				'COMMENTATOR'=>$bid
				
			);
			$this->db->order_by('COMMENT_ID','desc');

			$query=$this->db->get_where('t_comments',$arr);
			$result=$query->result();
			return $result;
		}
		public function allContent(){
			$arr=array(
				'BLOG_ID'=>$_GET['id'],
				
			);

			$query=$this->db->get_where('t_blogs',$arr);
			$result=$query->row();
			return $result;
		}
		public function add_comment($commentator,$blogid,$content,$addTime){
			$arr=array(
				'COMMENTATOR'=>$commentator,
				'BLOG_ID'=>$blogid,
				'CONTENT'=>$content,		
				'ADD_TIME'=>$addTime
			);
			$query=$this->db->insert('t_comments',$arr);
			return $query;
		}

	}

?>