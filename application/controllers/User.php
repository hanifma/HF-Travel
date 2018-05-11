<?php

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model("User_m");
	}

	public function form(){
		$this->load->view('form_user_v');
	}

	function index(){
		$this->load->model("User_m");

		$data['user'] = $this->User_m->gets();

		$this->load->view("user_data", $data);
	}

	function add(){
	  $data=array(
	  	"username" => $this->input->post
	  	("username"),
	  	"password" => $this->input->post
	  	("password"),
	  	"fullname" => $this->input->post
	  	("fullname"),
	  	"level" => $this->input->post
	  	("level")
	  	);

	  var_dump($data);
	  $this->User_m->add($data);
	}
	
	function del($id){
	  $this->load->model("User_m");

	  $this->User_m->del($id);

	  redirect('user');
	}
	
	function edit(){

	}
	function detail($id){
	  
	}
}