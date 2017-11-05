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
       'surName'=>$this->input->post('surName_input'),
       'gender'=>$this->input->post('gender_input'),
       'paranoid'=>$this->input->post('paranoid_input'),
       'citizen'=>$this->input->post('citizen_input'),
       'camperLevel'=>$this->input->post('camperLevel_input'),
       'isStudent'=>$this->input->post('isStudent_input'),
       'uniDep'=>$this->input->post('uniDep_input'),
       'ref'=>$this->input->post('ref_input'),
       'phone'=>$this->input->post('phone_input')
        );
        $this->db->insert('people',$data);
    }
    
}
?>