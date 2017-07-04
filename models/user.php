 <?php 
 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class User extends CI_Model{

	public function __construct() {

         parent::__construct();

         $this->load->database();
         $this->load->library("form_validation");
         $this->load->helper('form');
        
    }

	public function getinguserlist(){
		
		 $query = $this->db->get('users'); 

		 $result=$query->result();
		 
         return $result;

	        
	}

}

?>
