<?php  defined('BASEPATH') OR exit('No direct script access allowed');
	class 	Comment extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('comment_model');
			$this->load->model('user_model');
		}
		public function viewPost_logined(){
			// $blogid=$this->input->get('id');
			$result=$this->comment_model->allContent();
			$arr['data']=$result;
			$blogid=$_GET['id'];
			$comment=$_SESSION['USER_ID'];
			$result=$this->user_model->comment($blogid,$comment);
			$arr['data2']=$result;
			$this->load->view('viewPost_logined.php',$arr);
		}
		public function add_comment(){
			$commentator=$_SESSION['USER_ID'];
			$blogid=$_GET['id'];
			$content=$_POST['content'];
			$addTime=date("Y-m-d");
			$query=$this->comment_model->add_comment($commentator,$blogid,$content,$addTime);		
			if($query){
				redirect("comment/viewPost_logined?id=$blogid");
			}
		}


	}
?>