<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller{


		   public function __construct(){

			   	parent::__construct();

			   	$this->load->database();
			   	//Load the model first
			   	$this->load->model('usersignup');
			   	$this->load->library('form_validation');

		   }

			public function index(){

				$this->load->view('signup');

			}

			public function register(){

				   //Authentication Block Started

				    $userData = array();
		            $data=array();

				if($this->input->post("signup")){

	               $this->form_validation->set_rules("name","Name","required");
	               $this->form_validation->set_rules("email","Email","required");
	               $this->form_validation->set_rules("password","Password","required");
	               
	                $name=$this->input->post("name");
					$email=$this->input->post("email");
					$password=$this->input->post("password");

	                 $userData = array(

			               	'name' =>strip_tags($name),
			               	'email'=>strip_tags($email),
			               	'password'=>strip_tags($password)

	               	 );

	               	 if($this->form_validation->run() == true){

	               	 	$insert = $this->usersignup->register($userData);

		               if($insert){

		                    $this->session->set_userdata('success_msg', 'Your registration was successfully. Please login to your account.');
		                    redirect('login/index');
		                }
		                else{

		                    $data['error_msg'] = 'Some problems occured, please try again.';
		                } 

	               	 }else{

	               	 	$data["error"]="All fields are compulsory";

					    $this->load->view("signup",$data);
	               	 }


				}else{

					    $data['user'] = $userData;

					    $this->load->view("signup",$data);
	        }

					
	    }

}

?>