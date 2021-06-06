<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboardkm extends MY_Controller {

	public function index()
	{
		if ($this->session->userdata('level') != 'hakim') {
			redirect('login');
		}

		$this->data['jumlahinstrumen'] = $this->db->from('instrumen')->count_all_results();
		// $this->data['jumlahjurusita'] = $this->dbsipp->from('perkara')->count_all_results();
		$this->data['inputinstrumen'] = $this->db->from('input_instrumen')->count_all_results();

		// $this->data['queryakta'] = $this->db->order_by('id_akta', 'DESC')->where('status', 'antriansk')->limit(5)->get('akta');
		// $this->data['querynikah'] = $this->db->order_by('id_nikah', 'DESC')->where('status', 'diproses')->limit(5)->get('pernikahan');
		// $this->data['querykematian'] = $this->db->order_by('id_kematian', 'DESC')->where('status', 'diproses')->limit(5)->get('kematian');

		$this->data['konten'] = 'hakim/dashboardkm';
		$this->load->view('hakim/layout/index', $this->data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
