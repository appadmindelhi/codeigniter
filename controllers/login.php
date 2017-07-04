<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 /**
	 * Login script for the Admin User
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    public function __construct(){
       
         parent::__construct();
         $this->load->library("form_validation");
         $this->load->model('userlogin');
		 $this->load->helper('form');

    }

	public function index()
	{
		$this->load->view('login');
	}

	/*--UserLogin Method--*/

	public function userlogin(){

		$data=array();

        if($this->input->post("submit")){

        	  $email=$this->input->post("email");
		      $password=$this->input->post("password");

		      //Validation started

		      $this->form_validation->set_rules("email","Email","required");
		      $this->form_validation->set_rules("password","Password","required");

        	     $logindata=array(
                   "email"=>strip_tags($email),
                   "password"=>strip_tags($password)
        		);

        	if($this->form_validation->run() == true){

        		$resultdata=$this->userlogin->getinguserdata($logindata);

        		if($resultdata=="Correct"){
                    
        			$this->session->set_userdata(array('email'=>$email)); 
                    redirect('home/index');     
			       

        		}else{

        			$data['error']="<b>Login Failed ! </br>Please check Username and Password</b>";
			        $this->load->view("login",$data);

        		}

        	}else{

        		 $data['error']="<b>Something went wrong! Please Try again</b>";
			     $this->load->view("login",$data);
          
        	}

        }

	}
	
}