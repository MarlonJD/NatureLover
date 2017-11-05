<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function index() // Read
	{
		$this->load->model('MainModel');
        $this->load->helper('form');
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
					$userid = $_SESSION['user_id'];
					$check = $this->MainModel->isThereProfile($userid);
				if ($check === 0) {
					redirect("panel/fillProfile");
				} else {
					$data['veri'] = $this->MainModel->getUserData($userid);
					$this->load->view('Theme/header', ['title' => 'Doğaktif']);
					$this->load->view('Panel/mainView', $data);
					$this->load->view('Theme/footer');
				}
		} else {
			$this->load->view('Theme/header', ['title' => 'Doğaktif']);
			$this->load->view('Main/mainView');
			$this->load->view('Theme/footer');
        }
		
	}

	function fillProfile() 
    {
        $this->load->model('MainModel');
        $this->load->helper('form');
        if($this->input->post('btn_create'))//formda sumbit tuşuna basıldığında çalışacak fonksiyon
            {  
            $this->MainModel->create_profile();  //yeni elemanı database eklemek için model dosyamızı çağırıyoruz
            redirect('panel/');
            }
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            $this->load->view('Theme/header', ['title' => 'Dogaktif']);
            $this->load->view('Panel/mainView');
            $this->load->view('Theme/footer');
        } else {
			redirect('user/login');
        }    
    }

}