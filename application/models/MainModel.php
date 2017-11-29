<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MainModel extends CI_Model
{
  function __construct()
     {
         parent::__construct();
         $this->load->database();//database bağlantısı yapıyoruz.
     }
    
    function getUserData($userid)
    {
         $at = $this->db->get_where('people', array('userid'=>$userid));
         return $at->result();
    }
    function isThereProfile($userid)
    {
        $at = $this->db->get_where('people', array('userid'=>$userid));
        return $at->num_rows();  
    }

    function create_profile() //Camper Profile Creator
    {
        $data = array(
       'userid'=>$this->input->post('userid_input'),
       'name'=>$this->input->post('name_input'),
       'nickName'=>$this->input->post('nickName_input'),
       'surName'=>$this->input->post('surName_input'),
       'gender'=>$this->input->post('gender_input'),
       'paranoid'=>$this->input->post('paranoid_input'),
       'citizen'=>$this->hash_numbers($this->input->post('citizen_input')),
       'camperLevel'=>$this->input->post('camperLevel_input'),
       'isStudent'=>$this->input->post('isStudent_input'),
       'uniDep'=>$this->input->post('uniDep_input'),
       'ref'=>$this->input->post('ref_input'),
       'phone'=>$this->input->post('phone_input'),
       'ePhone'=>$this->input->post('ePhone_input')
        );
        $this->db->insert('people',$data);
    }

    /**
	 * hash_password function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @return string|bool could be a string on success, or bool false on failure
	 */
	private function hash_numbers($plaintext) {

        $password = '3sc3RLrpd17';
        $method = 'aes-256-cbc';
        
        // Must be exact 32 chars (256 bit)
        $password = substr(hash('sha256', $password, true), 0, 32);
        
        // IV must be exact 16 chars (128 bit)
        $iv = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
        
        // av3DYGLkwBsErphcyYp+imUW4QKs19hUnFyyYcXwURU=
        $encrypted = base64_encode(openssl_encrypt($plaintext, $method, $password, OPENSSL_RAW_DATA, $iv));
		return $encrypted;
		
	}
	
	/**
	 * verify_password_hash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return bool
	 */
	private function verify_number_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
    
}
?>