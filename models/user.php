 <?php 
 
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class User extends CI_Model{

	public function __construct() {

         parent::__construct();

         $this->load->database();
         $this->load->library("form_validation");
        
     }
     
	public function getinguserlist(){
		
		    $this->db->select("*");
            $this->db->from("users");
            $query = $this->db->get(); 
		    return $sql->result();
        
	}

}

?>
