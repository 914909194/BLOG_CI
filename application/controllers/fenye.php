<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Fenye extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->library('pagination');
		}
		public function index(){	
			$this->load->model("fenye_model");
			$allnum=$this->fenye_model->countall();
			$config['first_link'] = '首页';
			$config['last_link'] = '末页';	
			$config['base_url'] = site_url("fenye/index");
			$config['total_rows'] = $allnum;
			$config['per_page'] = 3;
			$this->pagination->initialize($config);	
			$page=$this->uri->segment(3)==null ? 0 : $this->uri->segment(3);	
			$result=$this->fenye_model->fennum($config['per_page'],$page);	
			$arr['data3']=$result;
			$this->load->view('index_logined.php',$arr);
		}

	}
?>