<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jaksa extends MY_Controller {
	
	private $pk = 'id_jaksa';
	private $table = 'jaksa';

	public function index()
	{
		$this->data['query'] = $this->db->order_by('id_jaksa', 'DESC')->get($this->table);
		$this->data['judul'] = 'Data Jaksa';
		$this->data['tombol'] = 'Tambah';
		$this->data['alert'] = $this->session->flashdata('alert');
		$this->data['konten'] = 'admin/jaksa/index';
		$this->load->view('admin/layout/index', $this->data);
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
			$this->data['judul'] = 'Tambah Jaksa';
			$this->data['tombol'] = 'Simpan';
			$this->data['action'] = site_url(uri_string());
			$this->data['alert'] = $this->session->flashdata('alert');
			$this->data['query'] = FALSE;
			$this->data['konten'] = 'admin/jaksa/tambah';
			$this->load->view('admin/layout/index', $this->data);
		}
	}

	public function edit()
	{
		$id_jaksa = $this->uri->segment(3);
		if ($_POST) {
			if ($this->validation()) {
				if ($this->m_database->update($this->pk, $id_jaksa, $this->table, $this->field_data())) {
					$this->session->set_flashdata('alert', alert('success', status('updated')));
				} else {
					$this->session->set_flashdata('alert', alert('warning', status('ada')));
				}
			} else {
				$this->session->set_flashdata('alert', alert('error', validation_errors()));
			} 
			redirect(uri_string());
		} elseif ($id_jaksa && $id_jaksa != 0 && ctype_digit((string) $id_jaksa)) {
			$this->data['judul'] = 'Edit Jaksa';
			$this->data['tombol'] = 'UPDATE';
			$this->data['action'] = site_url(uri_string());
			$this->data['posts'] = $this->data['jaksa'] = TRUE;
			$this->data['alert'] = $this->session->flashdata('alert');
			$this->data['query'] = $this->m_database->find($this->table, $this->pk, $id_jaksa)->row_array();
			$this->data['konten'] = 'admin/jaksa/tambah';
			$this->load->view('admin/layout/index', $this->data);

		} else {
			$this->session->set_flashdata('alert', alert('error', status('404')));
			redirect($this->uri->segment(1));
		}
	}

	private function field_data() {
		return [
			'nama_jaksa' => $this->input->post('nama_jaksa'),
			'pangkat' => $this->input->post('pangkat'),
			'nip' => $this->input->post('nip'),
			'jabatan' => $this->input->post('jabatan'),
		];
	}

	private function validation() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama_jaksa', 'Jaksa', 'trim|required');
		$this->form_validation->set_rules('pangkat', 'Pangkat', 'trim|required');
		$this->form_validation->set_rules('nip', 'NIP', 'trim|required');
		$this->form_validation->set_rules('jabatan', 'Jabatan', 'trim|required');
		$this->form_validation->set_error_delimiters('', '<br>');
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


	private function is_used($id_jaksa) {
		return $this->db
			->where('id_jaksa1', $id_jaksa)
			->count_all_results('serahterimabb') > 0 ? true : false;
	}


}

/* End of file jaksa.php */
/* Location: ./application/controllers/jaksa.php */