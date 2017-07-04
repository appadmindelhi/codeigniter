 <?php 
 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Userlogin extends CI_Model{

	 public function __construct() {

         parent::__construct();

         $this->load->database();
         $this->load->library("form_validation");
         
        //Your own constructor code
     }

	public function getinguserdata($data=array()){
		/*
           User Authentication Started
		*/
		    $this->db->select("*");
            $this->db->from("users");
		    $query=$this->db->where($data);
		    $query = $this->db->get();  
		    $num = $query->num_rows();

	        if($num>0){

	        	 return "Correct";

	        }else{

	        	return "Wrong";  
	        }
	}

}

?>
