<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Adminuser extends CI_Controller{
      
  /**
	 * Calling the Admin Users From Admin Panel
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function index(){

        $this->load->model('user');

        $data['users']=$this->user->getinguserlist();

        print_r($data);

    }
}
?>
