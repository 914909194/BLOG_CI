<?php  defined('BASEPATH') OR exit('No direct script access allowed');
	class Delblog extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('Delblog_model');
		}
		public function del(){
			$blogid=$_GET['id'];
			$this->Delblog_model->del($blogid);
			redirect("user/index_logined");
				
		}


	}
?>