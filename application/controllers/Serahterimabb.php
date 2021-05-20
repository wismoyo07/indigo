<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serahterimabb extends MY_Controller {

   private $pk = 'id_serahterima';
   private $table = 'serahterimabb';

   public function __construct() {
      parent::__construct();
   }

   public function index()
   {
      $this->load->helper('text');
      $this->data['judul'] = 'Data Serah Terima BB';
      $this->data['posts'] = $this->data['post'] = TRUE;
      $this->data['tombol'] = 'Tambah';
      $this->data['alert'] = $this->session->flashdata('alert');
      $this->data['query'] = $this->db
      ->select('p.*, c.nama_jaksa as nama_jaksa1, d.nama_jaksa as nama_jaksa2, c.id_jaksa, d.id_jaksa')
         ->join('jaksa c', 'p.id_jaksa1 = c.id_jaksa', 'LEFT')
         ->join('jaksa d', 'p.id_jaksa2 = d.id_jaksa', 'LEFT')
         ->order_by('p.tgl_input_bb', 'DESC')
         ->get($this->table . ' p');
      
      $this->data['konten'] = 'admin/serahterimabb/index';
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
         $this->data['judul'] = 'Tambah Surat';
         $this->data['tombol'] = 'Simpan';
         $this->data['jaksa'] = $this->m_database->dropdown('id_jaksa', 'nama_jaksa', 'jaksa');
         $this->data['action'] = site_url(uri_string());
         $this->data['alert'] = $this->session->flashdata('alert');
         $this->data['query'] = FALSE;
         $this->data['konten'] = 'admin/serahterimabb/tambah';
         $this->load->view('admin/layout/index', $this->data);
      }
   }

   public function update() {
      $id = $this->uri->segment(3);
      if ($_POST) {
         if ($this->validation()) {
               if ($this->m_database->update($this->pk, $id, $this->table, $this->field_data('update'))) {
                  $this->session->set_flashdata('alert', alert('success', status('updated')));
               } else {
                  $this->session->set_flashdata('alert', alert('warning', status('ada')));
               }
            }
         redirect($this->uri->segment(1));
      } elseif ($id && $id != 0 && ctype_digit((string) $id)) {
         $this->data['judul'] = 'Edit Data';
         $this->data['tombol'] = 'UPDATE';
         $this->data['action'] = site_url(uri_string());
         $this->data['posts'] = $this->data['post'] = TRUE;
         $this->data['alert'] = $this->session->flashdata('alert');
         $this->data['jaksa'] = $this->m_database->dropdown('id_jaksa', 'nama_jaksa', 'jaksa');
         $this->data['query'] = $this->m_database->find($this->table, $this->pk, $id)->row_array();
         $this->data['konten'] = 'admin/serahterimabb/tambah';
         $this->load->view('admin/layout/index', $this->data);
         // print_r($this->data['query']);
      } else {
         $this->session->set_flashdata('alert', alert('error', status('404')));
         redirect($this->uri->segment(1));
      }
   }

   public function delete() {
      if (isset($_POST[$this->pk]) && isset($_POST['delete'])) {
         $counter = 0;
         foreach ($_POST[$this->pk] as $key) {
            $query = $this->m_database->find($this->table, $this->pk, $key)->row_array();

            if ($this->m_database->delete($this->pk, $key, $this->table)) {
               @unlink('./assets/post/' . $query['post_image']);
               @unlink('./assets/post/thumb/' . $query['post_image']);
               $counter++;
            }
         }
         $counter > 0 ?
         $this->session->set_flashdata('alert', alert('success', status('deleted'))) :
         $this->session->set_flashdata('alert', alert('error', status('not_deleted')));
      } elseif ($this->uri->segment(3)) {
         $query = $this->m_database->find($this->table, $this->pk, $this->uri->segment(3))->row_array();

         if ($this->m_database->delete($this->pk, $this->uri->segment(3), $this->table)) {
            @unlink('./assets/post/' . $query['post_image']);
            @unlink('./assets/post/thumb/' . $query['post_image']);
            $this->session->set_flashdata('alert', alert('success', status('deleted')));
         } else {
            $this->session->set_flashdata('alert', alert('error', status('not_deleted')));
         }
      } else {
         $this->session->set_flashdata('alert', alert('warning', status('not_selected')));
      }
      redirect($this->uri->segment(1));
   }

   private function field_data($type = 'create', $photo = NULL) {
      $data['hari_input_bb'] = $this->input->post('hari_input_bb');
      $data['tgl_input_bb'] = $this->input->post('tgl_input_bb');
      $data['no_print'] = $this->input->post('no_print');
      $data['barang_bukti'] = $this->input->post('barang_bukti');
      $data['nama_terpidana'] = $this->input->post('nama_terpidana');
      $data['id_jaksa1'] = $this->input->post('id_jaksa1');
      $data['id_jaksa2'] = $this->input->post('id_jaksa2');
      $data['keterangan'] = $this->input->post('keterangan');
      $data['status_bb'] = $this->input->post('status_bb');
      $data['no_putusan'] = $this->input->post('no_putusan');
      $data['tgl_putusan'] = $this->input->post('tgl_putusan');
      $data['tgl_no_print'] = $this->input->post('tgl_no_print');

      return $data;
   }

   private function validation() {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('hari_input_bb', 'Hari', 'trim|required');
      $this->form_validation->set_rules('hari_input_bb', 'Tanggal', 'trim|required');
      $this->form_validation->set_rules('no_print', 'No Surat', 'trim|required');
      $this->form_validation->set_rules('no_putusan', 'No Putusan', 'trim|required');
      $this->form_validation->set_error_delimiters('', '<br>');
      return $this->form_validation->run();
   }

   public function cetak()
   {

      $id = $this->uri->segment(3);
      $this->data['query'] = $this->db
                                 ->select('p.*, c.nama_jaksa as nama_jaksa1, c.pangkat as pangkat1, c.nip as nip1, c.jabatan as jabatan1, d.nama_jaksa as nama_jaksa2, d.pangkat as pangkat2, d.nip as nip2, d.jabatan as jabatan2, c.id_jaksa, c.pangkat, d.id_jaksa, e.*')
                                 ->join('jaksa c', 'p.id_jaksa1 = c.id_jaksa', 'LEFT')
                                 ->join('jaksa d', 'p.id_jaksa2 = d.id_jaksa', 'LEFT')
                                 ->join('pendapathukum e', 'p.id_serahterima = e.id_serahterimabb', 'LEFT')      
                                 ->where('p.id_serahterima', $id)
                                 ->get($this->table . ' p')->row_array();

     $this->load->view('admin/cetak/print_serahterimabb', $this->data);

     $html = $this->output->get_output();

     // Load/panggil library dompdfnya
     $this->load->library('dompdf_gen');

     // Convert to PDF
     $this->dompdf->set_paper('legal', 'Potrait');
     $this->dompdf->load_html($html);
     $this->dompdf->render();
     //utk menampilkan preview pdf
     $this->dompdf->stream(date('d-m-Y').'.pdf',array('Attachment'=>0));
    }

}

/* End of file posts.php */
/* Location: ./application/controllers/posts.php */