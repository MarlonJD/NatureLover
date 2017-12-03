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


    function getUserID($user)
    {
        $at = $this->db->get_where('users', array('username'=>$user));
        $at2 = $at->result();
        return $at2[0]->id;
    }
 
    function getUsers()
    {
        $at = $this->db->get_where('users', array('is_admin'=>'0'));
        return $at->result();
    }
    
    function getEventsA()
    {
        $at = $this->db->get_where('events');
        return $at->result();
    }

    function getEvents()
    {
        $at = $this->db->order_by("date", "desc")
                        ->get_where('events', array('status'=>'0'));
        return $at->result();
    }
    
    function deleteUser($username)
    {
        if ($username == "marlonjd") { 
            echo "Napıyon panpa o kadar da değil"; 
        } else {
            $query = "DELETE FROM users WHERE username = '$username'";
            $result = $this->db->query($query);
        }			
    }

    function confirmUser($userid)
    {   
            $query = "UPDATE users SET is_confirmed = 1 WHERE id = $userid";
            $result = $this->db->query($query);
        		
    }

    function makeUpUser($userid)
    {   
            $query = "UPDATE users SET is_confirmed = 2 WHERE id = $userid";
            $result = $this->db->query($query);
        		
    }

    function create_event() //Etkinlik Oluşturma Fonksiyonu
    {
        $data = array(
       'name'=>$this->input->post('name_input'),
       'permaId'=>$this->input->post('permaId_input'),
       'owner'=>$this->input->post('owner_input'),
       'place'=>$this->input->post('place_input'),
       'date'=>$this->input->post('date_input'),
       'date2'=>$this->input->post('date2_input'),
       'type'=>$this->input->post('type_input'),
       'subType'=>$this->input->post('subType_input'),
       'shortDetail'=>$this->input->post('shortDetail_input')
        );
        $this->db->insert('events',$data);
    }

}
?>