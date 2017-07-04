<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersignup extends CI_Model{

	public function __construct(){

       parent::__construct();
       
       $this->load->database();

	}

    public function register($data = array()){

        $insert=$this->db->insert("users",$data);

        if($insert){

            return $this->db->insert_id();

        }else{

            return false;
        }
 
    }


}

?>