<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instrumenkm extends MY_Controller {
	
	private $pk = 'id_instrumen';
	private $table = 'instrumen';

	public function __construct() {
		parent::__construct();
		$this->sipp = $this->load->database('dbsipp', TRUE);
		//$this->db = $this->load->database('indigo', TRUE);
	 }

	public function index()
	{
		$this->data['query'] = $this->db->order_by('id_instrumen', 'DESC')->get($this->table);
		$this->data['judul'] = 'Jenis Instrumen';
		$this->data['tombol'] = 'Tambah';
		$this->data['alert'] = $this->session->flashdata('alert');
		$this->data['konten'] = 'hakim/instrumenkm/index';
		$this->load->view('hakim/layout/index', $this->data);
	}

	public function tambah()
	{
		if ($_POST) {
			if ($this->validation()) {
				if ($this->db->insert($this->table, $this->field_data())) {
					$this->session->set_flashdata('alert', alert('success', status('dibuat')));
				} else {
					$this->session->set_flashdata('alert', alert('warning', status('ada')));
				}
			} else {
				$this->session->set_flashdata('alert', alert('error', validation_errors()));
			}
			redirect(uri_string());
		} else {
			$this->data['judul'] = 'Tambah Instrumen';
			$this->data['tombol'] = 'Simpan';
			$this->data['action'] = site_url(uri_string());
			$this->data['alert'] = $this->session->flashdata('alert');
			$this->data['query'] = FALSE;
			$this->data['konten'] = 'hakim/instrumenkm/tambah';
			$this->load->view('hakim/layout/index', $this->data);
		}
	}

	public function edit()
	{
		$id_instrumen = $this->uri->segment(3);
		if ($_POST) {
			if ($this->validation()) {
				if ($this->m_database->update($this->pk, $id_instrumen, $this->table, $this->field_data())) {
					$this->session->set_flashdata('alert', alert('success', status('updated')));
				} else {
					$this->session->set_flashdata('alert', alert('warning', status('ada')));
				}
			} else {
				$this->session->set_flashdata('alert', alert('error', validation_errors()));
			} 
			redirect(uri_string());
		} elseif ($id_instrumen && $id_instrumen != 0 && ctype_digit((string) $id_instrumen)) {
			$this->data['judul'] = 'Edit Instrumen';
			$this->data['tombol'] = 'UPDATE';
			$this->data['action'] = site_url(uri_string());
			$this->data['posts'] = $this->data['instrumen'] = TRUE;
			$this->data['alert'] = $this->session->flashdata('alert');
			$this->data['query'] = $this->m_database->find($this->table, $this->pk, $id_instrumen)->row_array();
			$this->data['konten'] = 'hakim/instrumenkm/tambah';
			$this->load->view('hakim/layout/index', $this->data);

		} else {
			$this->session->set_flashdata('alert', alert('error', status('404')));
			redirect($this->uri->segment(1));
		}
	}

	private function field_data() {
		return [
			'instrumen_nama' => $this->input->post('instrumen_nama'),
		];
	}

	private function validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('instrumen_nama', 'Instrumen', 'trim|required');
		// $this->form_validation->set_rules('pangkat', 'Pangkat', 'trim|required');
		// $this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		// $this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		// $this->form_validation->set_error_delimiters('', '<br>');
		return $this->form_validation->run();
	}


	//delete dengan check
	public function delete() {
		if (isset($_POST['delete']) && isset($_POST[$this->pk])) {
			$n = 0;
			foreach ($_POST[$this->pk] as $key) {
				if (!$this->is_used($key)) {
					if ($this->db->where($this->pk, $key)->delete($this->table)) {
						$n++;
					}
				}
			}
			$n > 0 ?
			$this->session->set_flashdata('alert', alert('success', status('deleted'))) :
			$this->session->set_flashdata('alert', alert('info', status('not_deleted')));
		} else if ($this->uri->segment(3)) {
			if (!$this->is_used($this->uri->segment(3))) {
				if ($this->db->where($this->pk, $this->uri->segment(3))->delete($this->table)) {
					$this->session->set_flashdata('alert', alert('success', status('deleted')));
				} else {
					$this->session->set_flashdata('alert', alert('info', status('not_deleted')));
				}
			}
		} else {
			$this->session->set_flashdata('alert', alert('warning', status('not_selected')));
		}
		redirect($this->uri->segment(1));
	}


	private function is_used($id_instrumen) {
		return $this->db
			->where('id_instrumen', $id_instrumen)
			->count_all_results('instrumen') > 0 ? true : false;
	}


}

/* End of file instrumen.php */
/* Location: ./application/controllers/instrumen.php */