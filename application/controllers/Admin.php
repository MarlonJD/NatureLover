<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index() // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
		$this->load->model('MainModel');
		$this->load->helper('test');
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			if ($_SESSION['is_admin']  === true) {

				$data['uyeler'] = $this->MainModel->getUsers();

				$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin Paneli']);
				$this->load->view('Admin/adminView', $data);
				$this->load->view('Theme/adminFooter');


			} else {
				redirect('user/login');
			}
		} else {
			redirect('user/login');
        }
	}
	
	public function users() // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
		$this->load->model('MainModel');
		$this->load->helper('test');
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			if ($_SESSION['is_admin']  === true) {

				$data['uyeler'] = $this->MainModel->getUsers();

				$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin Paneli']);
				$this->load->view('Admin/adminUsersView', $data);
				$this->load->view('Theme/adminFooter');


			} else {
				redirect('user/login');
			}
		} else {
			redirect('user/login');
        }
	}

	public function user($username) // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {

            $userid = $this->MainModel->getUserID($username);
            $data['veri'] = $this->MainModel->getUserData($userid);
            
            $this->load->view('Theme/adminHeader',['title' => 'Doğaktif Admin Paneli']);
            $this->load->view('Admin/adminUser', $data);
            $this->load->view('Theme/adminFooter');

		} else {
			redirect('user/login');
        }
        
	}

	public function userDelete($username) // User Delete
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {
				if ($username == "marlonjd") { 
					$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
					$this->load->view('Admin/adminError', ['error' => 'Sen hayırdır?! Kimi siliyon panpa :D']);
					$this->load->view('Theme/adminFooter');
				}
				else {
					$this->MainModel->deleteUser($username);
					if ($this->db->affected_rows() > 0) {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminDeleted');
						$this->load->view('Theme/adminFooter');
					} else {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminError', ['error' => 'Üye bi sebebden Silinemedi']);
						$this->load->view('Theme/adminFooter');
					}
				}

		} else {
			redirect('user/login');
        }
        
	}

	public function profileDelete($username) // User Delete
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {
				if ($username == "marlonjd") { 
					$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
					$this->load->view('Admin/adminError', ['error' => 'Sen hayırdır?! Kimi siliyon panpa :D']);
					$this->load->view('Theme/adminFooter');
				}
				else {
					$userid = $this->MainModel->getUserID($username);
					$this->MainModel->deleteProfile($userid);
					if ($this->db->affected_rows() > 0) {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminDeleted');
						$this->load->view('Theme/adminFooter');
					} else {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminError', ['error' => 'Üye bi sebebden Silinemedi']);
						$this->load->view('Theme/adminFooter');
					}
				}

		} else {
			redirect('user/login');
        }

	}

	public function userConfirm($username) // User Delete
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {
				if ($username == "marlonjd") { 
					$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
					$this->load->view('Admin/adminError', ['error' => 'Sen hayırdır?! Kimi siliyon panpa :D']);
					$this->load->view('Theme/adminFooter');
				}
				else {
					$userid = $this->MainModel->getUserID($username);
					$this->MainModel->confirmUser($userid);
					if ($this->db->affected_rows() > 0) {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminInfo', ['info' => 'Üye Onaylandı']);
						$this->load->view('Theme/adminFooter');
					} else {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminError', ['error' => 'Üye bi sebebden Silinemedi']);
						$this->load->view('Theme/adminFooter');
					}
				}

		} else {
			redirect('user/login');
        }

	}

	public function userUp($username) // User Delete
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {
				if ($username == "marlonjd") { 
					$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
					$this->load->view('Admin/adminError', ['error' => 'Sen hayırdır?! Kimi siliyon panpa :D']);
					$this->load->view('Theme/adminFooter');
				}
				else {
					$userid = $this->MainModel->getUserID($username);
					$this->MainModel->makeUpUser($userid);
					if ($this->db->affected_rows() > 0) {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminInfo', ['info' => 'Üye Ana gruba alındı']);
						$this->load->view('Theme/adminFooter');
					} else {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminError', ['error' => 'Üye bi sebebden Silinemedi']);
						$this->load->view('Theme/adminFooter');
					}
				}

		} else {
			redirect('user/login');
        }

	}

	public function userDown($username) // User Delete
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {
				if ($username == "marlonjd") { 
					$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
					$this->load->view('Admin/adminError', ['error' => 'Sen hayırdır?! Kimi siliyon panpa :D']);
					$this->load->view('Theme/adminFooter');
				}
				else {
					$userid = $this->MainModel->getUserID($username);
					$this->MainModel->confirmUser($userid);
					if ($this->db->affected_rows() > 0) {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminInfo', ['info' => 'Üye Hazırlığı Düşürüldü']);
						$this->load->view('Theme/adminFooter');
					} else {
						$this->load->view('Theme/adminHeader', ['title' => 'Doğaktif Admin']);
						$this->load->view('Admin/adminError', ['error' => 'Üye bi sebebden Silinemedi']);
						$this->load->view('Theme/adminFooter');
					}
				}

		} else {
			redirect('user/login');
        }

	}


}