<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('level') == 'admin') {
			redirect('dashboard');
		} elseif ($this->session->userdata('level') == 'jurusita') {
			redirect('dashboardjs');
		} elseif ($this->session->userdata('level') == 'hakim') {
			redirect('dashboardkm');
		}
	}

	public function index() {
		if ($this->auth->is_logged_in() == TRUE) {
			redirect('dashboard');
		} elseif ($this->auth->is_logged_in()== TRUE) {
			redirect('dashboardjs');
		}

		if ($_POST) {
			sleep(2);
			if ($this->validation()) {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				echo $this->auth->login($username, $password) ? 1 : 0;
				// redirect('dashboard','refresh');
			} else {
				echo 'terjadi kesalahan';
			}

		} else {
			$data['action'] = site_url(uri_string());
         	$this->load->view('admin/login', $data);
		} 

	}

	public function validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_error_delimiters('<i class="icon-remove-sign"></i> ', '<br>');
		return $this->form_validation->run();		
	}

	public function logout() {
      if ($this->auth->is_logged_in()) {
         $this->auth->logout();
      }
      redirect('login');
   }
}
