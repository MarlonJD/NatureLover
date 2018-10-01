<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');

        $data['veri'] = $this->MainModel->hepsini_al();
		$this->load->view('Main/mainView', $data);
	}

    function Detail($id) {
        $this->load->model('MainModel');
		$data['veri']=$this->MainModel->sadece_birini_al($id);
        $this->load->view('Main/mainDetail',$data);
	}
    
	function Create() 
    {
        $this->load->model('MainModel');
        $this->load->helper('form');
        if($this->input->post('buton_ismi'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
            {  
            $this->MainModel->veri_ekleme_fonksiyonu();  //yeni elemanı database eklemek için model dosyamızı çağırıyoruz
            }
        $this->load->view('Main/mainCreate');
    }

	function Delete($id)
	{
		$this->load->model('MainModel');
		$this->MainModel->veri_silme_fonksiyonu($id);
		if ($this->db->affected_rows() > 0) {
			$this->load->view('Main/mainDeleted');
		} else {
			$this->load->view('Main/mainError', ['error' => 'Silinemedi']);
		}
	}


}