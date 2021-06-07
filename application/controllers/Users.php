<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {
    private $pk = 'id_iuser';
    private $table = 'users';
    
    public function __construct() {
        parent::__construct();
        $this->sipp = $this->load->database('dbsipp', TRUE);
        $this->db = $this->load->database('indigo', TRUE);
    }

   public function index() {
    $this->data['query'] = $this->db
    ->select('*')->where('level!="admin"')->order_by('id_user', 'DESC')->get($this->table);
    $this->data['judul'] = 'User INDIGO';
    $this->data['tombol'] = 'Tambah';
    $this->data['alert'] = $this->session->flashdata('alert');
    // $this->data['ddji'] = $this->load->model('ddjnsinst');
    $this->data['konten'] = 'admin/users/index';
    $this->load->view('admin/layout/index', $this->data);
   }
   
}