<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index() // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
		$this->load->view('Main/mainView', $data);
	}

	public function about() // Hakkımızda Sayfası
	{
		$this->load->helper('url'); //
        $this->load->model('MainModel');
		$this->load->view('Main/aboutView', $data);
	}


}