<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anasayfa extends CI_Controller {

	public function index() // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');

        $data['veri'] = $this->MainModel->hepsini_al();
        $this->load->view('anasayfa/header');
        $this->load->view('anasayfa/anasayfaView');
        $this->load->view('anasayfa/footer');
	}


}