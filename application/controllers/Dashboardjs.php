<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardjs extends MY_Controller {

	public function index()
	{
		if ($this->session->userdata('level') != 'jurusita') {
			redirect('login');
		}

		$this->data['jumlahjaksa'] = $this->db->from('jaksa')->count_all_results();
		$this->data['jumlahserahterimabb'] = $this->db->from('serahterimabb')->count_all_results();
		$this->data['pendapathukum'] = $this->db->from('pendapathukum')->count_all_results();

		// $this->data['queryakta'] = $this->db->order_by('id_akta', 'DESC')->where('status', 'antriansk')->limit(5)->get('akta');
		// $this->data['querynikah'] = $this->db->order_by('id_nikah', 'DESC')->where('status', 'diproses')->limit(5)->get('pernikahan');
		// $this->data['querykematian'] = $this->db->order_by('id_kematian', 'DESC')->where('status', 'diproses')->limit(5)->get('kematian');

		$this->data['konten'] = 'jurusita/dashboardjs';
		$this->load->view('jurusita/layout/index', $this->data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
