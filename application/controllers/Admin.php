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

	public function user($username) // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {

            $userid = $this->MainModel->getUserID($username);
            $data['veri'] = $this->MainModel->getUserData($userid);
            
            $this->load->view('Theme/adminHeader',['title' => 'Doğaktif Admin Paneli']);
            $this->load->view('Admin/adminUsers', $data);
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

	function uploadExcel(){
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			if ($_SESSION['is_admin']  === true) {

				$data = array();
				$this->lang->load("main","german");
				$this->load->model('mainModel');
				$data['uploaded_excels'] = $this->mainModel->get_excels();
				$this->load->view('Theme/adminHeader', ['title' => 'FigurMacher Admin']);
				$this->load->view('Admin/uploadExcel', $data);
				$this->load->view('Theme/adminFooter');

			} else {
				redirect('user/login');
			}
		} else {
			redirect('user/login');
        }
		
	}
	
	function upload(){
		$this->load->model('mainModel');
		$this->load->helper('form');
		$this->lang->load("main","german");
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			if ($_SESSION['is_admin']  === true) {

				$filename = md5(uniqid(rand(), true));
				$config = array(
					'upload_path' => 'uploads',
					'allowed_types' => "zip|html|htm",
					'file_name' => $filename
				);
				
				$this->load->library('upload', $config);
				
				if($this->upload->do_upload())
					{
					$file_data = $this->upload->data();
					
					$data2 = array('upload_data' => $this->upload->data());
					$zip = new ZipArchive;
					$file = $data2['upload_data']['full_path'];
					$data['file_name'] = md5(uniqid(rand(), true)); 
					chmod($file,0777);
					if ($zip->open($file) === TRUE) {
							$zip->extractTo('./uploads/'.$data['file_name']);
							$zip->close();
							echo 'ok';
					} else {
							echo 'failed';
					}

					$data['file_dir'] = $file_data['file_name'];
					$data['date_uploaded'] = date('Y-m-d H:i:s');
					$data['nameExcel'] = $this->input->post('nameExcel_input');
					$this->load->model('mainModel');
					$this->mainModel->save_excel($data);
					
					$data['message'] = "Datei hochgeladen";
				
					$this->load->model('mainModel');
					$data['uploaded_excels'] = $this->mainModel->get_excels();
					$this->load->view('Theme/adminHeader', ['title' => 'FigurMacher Admin']);
					$this->load->view('Admin/uploadExcel', $data);
					$this->load->view('Theme/adminFooter');
					}
					else
					{
					$data = array();	
					$this->load->model('mainModel');			
					$data['uploaded_excels'] = $this->mainModel->get_excels();
					
					$error = $this->upload->display_errors();
					$data['errors'] = $error;
					$this->load->view('Theme/adminHeader', ['title' => 'FigurMacher Admin']);
					$this->load->view('Admin/uploadExcel', $data);
					$this->load->view('Theme/adminFooter');
					}


			} else {
				redirect('user/login');
			}
		} else {
			redirect('user/login');
        }
		
	}

	public function Excel() // Read
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
		$this->load->helper('test');
		$this->lang->load("main","german");
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			if ($_SESSION['is_admin']  === true) {
				$this->load->model('mainModel');
				$data['excels'] = $this->mainModel->get_excels();

				$this->load->view('Theme/adminHeader', ['title' => 'FigurMacher Admin']);
				$this->load->view('Admin/adminExcel', $data);
				$this->load->view('Theme/adminFooter');


			} else {
				redirect('user/login');
			}
		} else {
			redirect('user/login');
        }
	}

	public function deleteExcel($excelname) // User Delete
	{
		$this->load->helper('url'); //url helper'dan base_url fonksiyonunu çekmek için çağırıyoruz
        $this->load->model('MainModel');
        $this->load->helper('test');
        $this->lang->load("main","german");
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true && $_SESSION['is_admin']  === true) {

			$this->MainModel->deleteExcel($excelname);
			if ($this->db->affected_rows() > 0) {
				$this->load->view('Theme/adminHeader', ['title' => 'FigurMacher Admin']);
				$this->load->view('Admin/adminDeletedExcel');
				$this->load->view('Theme/adminFooter');
			} else {
				$this->load->view('Theme/adminHeader', ['title' => 'FigurMacher Admin']);
				$this->load->view('Admin/adminError', ['error' => 'Blatt kann nicht gelöscht werden']);
				$this->load->view('Theme/adminFooter');
			}

		} else {
			redirect('user/login');
        }
        
	}



}