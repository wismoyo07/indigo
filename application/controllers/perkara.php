<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perkara extends MY_Controller {

   // private $pk = 'id_pendapathukum';
   // private $table = 'pendapathukum';

   private $pk = 'perkara_id';
   private $table = 'perkara';

   public function __construct() {
      parent::__construct();
      $this->sipp = $this->load->database('dbsipp', TRUE);
	  // $this->db = $this->load->database('indigo', TRUE);
   }

   public function index()
   {
      $this->load->helper('text');
      $this->data['judul'] = 'Data Perkara';
      $this->data['posts'] = $this->data['post'] = TRUE;
      $this->data['tombol'] = 'Tambah';
      $this->data['alert'] = $this->session->flashdata('alert');
      // $this->data['query'] = $this->db
      // ->select('p.*, c.id_jaksa, c.nama_jaksa, d.*')
         // ->join('serahterimabb d', 'p.id_serahterimabb = d.id_serahterima', 'LEFT')      
         // ->join('jaksa c', 'p.id_jaksa = c.id_jaksa', 'LEFT')
         // ->order_by('p.tgl_input', 'DESC')
         // ->get($this->table . ' p');
      
      $this->data['query'] = $this->sipp
      ->select('perkara.*')
         ->order_by('perkara_id', 'DESC')
         ->get($this->table. ' perkara');
      
      $this->data['konten'] = 'admin/perkara/index';
      $this->load->view('admin/layout/index', $this->data);
   }

   /** public function tambah()
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
         // $this->data['putusan'] = $this->m_database->getputusan('order by id_serahterima desc')->result_array();
         $this->data['jaksa'] = $this->m_database->dropdown('id_jaksa', 'nama_jaksa', 'jaksa');
         $this->data['action'] = site_url(uri_string());
         $this->data['alert'] = $this->session->flashdata('alert');
         $this->data['putusan'] = $this->m_database->dropdownreadyputusan('id_serahterima', 'no_putusan', 'serahterimabb');
         $this->data['putusan_detail'] = $this->db
                                          ->select('p.*, c.nama_jaksa as nama_jaksa1, d.nama_jaksa as nama_jaksa2, c.id_jaksa, d.id_jaksa')
                                             ->join('jaksa c', 'p.id_jaksa = c.id_jaksa', 'LEFT')
                                             ->join('jaksa d', 'p.id_jaksa = d.id_jaksa', 'LEFT')
                                             ->order_by('p.tgl_input', 'DESC')
                                             ->get($this->table . ' p');
         $this->data['query'] = FALSE;
         $this->data['konten'] = 'admin/pendapathukum/tambah';
         $this->load->view('admin/layout/index', $this->data);
      }
   } */

   public function get_detail_noputusan(){
        $id=$this->input->post('nomor_perkara');
        $data=array(
            'detail'=>$this->m_database->getdatabyid($id),
        );
        $this->load->view('admin/perkara/detail', $data);
    }

   /** public function update() {
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
         $this->data['putusan'] = $this->m_database->dropdown('id_serahterima', 'no_putusan', 'serahterimabb');
         
         // $this->data['query'] = $this->m_database->find($this->table, $this->pk, $id)->row_array();
         $this->data['query'] = $this->db
                                 ->select('p.*, c.*, d.*')
                                 ->join('serahterimabb d', 'p.id_serahterimabb = d.id_serahterima', 'LEFT')      
                                 ->join('jaksa c', 'p.id_jaksa = c.id_jaksa', 'LEFT')
                                 ->where('p.id_pendapathukum', $id)
                                 ->get($this->table . ' p')->row_array();
         $this->data['konten'] = 'admin/pendapathukum/tambah';
         $this->load->view('admin/layout/index', $this->data);
         // print_r($this->data['query']);
      } else {
         $this->session->set_flashdata('alert', alert('error', status('404')));
         redirect($this->uri->segment(1));
      }
   } */

   /** public function delete() {
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
   } */

   private function field_data($type = 'tambah', $photo = NULL) {
      $data['hari_input'] = $this->input->post('hari_input');
      $data['id_jaksa'] = $this->input->post('id_jaksa');
      $data['tgl_input'] = $this->input->post('tgl_input');
      $data['id_serahterimabb'] = $this->input->post('id_serahterimabb');
      $data['tgl_kekuatan_hukum'] = $this->input->post('tgl_kekuatan_hukum');
      return $data;
   }

   private function validation() {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('hari_input', 'Hari', 'trim|required');
      $this->form_validation->set_rules('tgl_input', 'Tanggal', 'trim|required');
      $this->form_validation->set_rules('id_serahterimabb', 'NO Putusan', 'trim|required');
      $this->form_validation->set_rules('tgl_kekuatan_hukum', 'Tanggal Kekuatan Hukum', 'trim|required');
      $this->form_validation->set_error_delimiters('', '<br>');
      return $this->form_validation->run();
   }


   public function cetak()
   {

      $id = $this->uri->segment(3);
      $this->data['query'] = $this->db
                                 ->select('p.*, c.*, e.*')
                                 ->join('serahterimabb e', 'p.id_serahterimabb = e.id_serahterima', 'LEFT')
                                 ->join('jaksa c', 'p.id_jaksa = c.id_jaksa', 'LEFT')
                                 ->where('p.id_pendapathukum', $id)
                                 ->get($this->table . ' p')->row_array();
     $this->load->view('admin/cetak/print_pendapathukum', $this->data);
     // print_r($this->data['query']);

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