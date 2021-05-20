<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('aplikasi');
        date_default_timezone_set('Asia/Jakarta');
        $allowed = [
            'web',

        ]; 

        $this->data['nama_aplikasi']        = $this->config->item('nama_aplikasi');
        $this->data['frontend_aplikasi']    = $this->config->item('frontend_aplikasi');
        $this->data['deskripsi_aplikasi']   = $this->config->item('deskripsi_aplikasi');
        $this->data['backend_aplikasi']     = $this->config->item('backend_aplikasi');
        $this->data['versi_aplikasi']       = $this->config->item('versi_aplikasi');
        $this->data['author']               = 'jajulay and friends';

        if ($this->uri->segment(1) != FALSE 
            && ! in_array($this->uri->segment(1).'/'.$this->uri->segment(2), $allowed) 
            && $this->uri->segment(1) != 'web') {
            if ( ! $this->auth->is_logged_in() == TRUE) {
                redirect('login');
            }
        }
    }
}
